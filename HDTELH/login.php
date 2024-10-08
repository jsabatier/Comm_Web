<?php
require_once "includes/functions.php";
session_start();

if (!empty($_POST['login']) and !empty($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $stmt = getDb()->prepare('select * from user_et_admin where Login_User=? and Mdp_User=?');
    $stmt->execute(array($login, $password));
    if ($stmt->rowCount() == 1) {
        // Authentication successful
        $_SESSION['login'] = $login;
        redirect("index.php");
        // isUserConnected == TRUE; 
    }
    else {
        $error = "Utilisateur non reconnu";
    }
}
?>

<!doctype html>
<html>

<?php 
$pageTitle = "Connexion";
require_once "includes/head.php";
?>

<body>
    <div class="container">
        <?php require_once "includes/header.php"; ?>

        <div class="container rounded bg-dark p-5">
        <h2 class="text-center"><?= $pageTitle ?></h2>

        <?php if (isset($error)) { ?>
            <div class="alert alert-danger">
                <strong>Erreur !</strong> <?= $error ?>
            </div>
        <?php } ?>

        <div class="well">
        </br>
            <form class="form-signin form-horizontal" role="form" action="login.php" method="post">
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    Login<input type="text" name="login" class="form-control" placeholder="Entrez votre login" required autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    Mot de passe<input type="password" name="password" class="form-control" placeholder="Entrez votre mot de passe" required>
                        
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    </br>
                    </br>
                        <button type="submit" class="btn btn-default btn-primary"><span class="glyphicon glyphicon-log-in"></span> Se connecter</button>
                    </div>
                </div>
            </form>
        </div>

        <?php require_once "includes/footer.php"; ?>
        </div>
    </div>

    <?php require_once "includes/scripts.php"; ?>
</body>

</html>