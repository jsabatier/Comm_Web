<?php

require_once "includes/functions.php";

print_r($_POST);

    if (!empty($_POST['nom']) && !empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['niv'])) {
        

        $nom = $_POST['nom'];
        $login = $_POST['login'];
        $password = $_POST['password'];
        $admin= $_POST['niv'];
        $stmt = getDb()->prepare('INSERT INTO `user_et_admin` (`Nom_User`,`Login_User`,`Mdp_User`,`Admin`) VALUES (:nom,:pseudo,:pass,:adm)');
        $stmt->execute(array(
            'nom' => $nom,
            'pseudo' => $login,
            'pass' => $password,
            'adm' => $admin ));

        if ($stmt->rowCount() == 1) {
            // Authentication successful
            $_SESSION['login'] = $login;
            redirect("login.php");
        }
    }
    else
    {
        $error = "Manque des infos";
    }

?>
