<?php

require_once "includes/functions.php";

//print_r($_POST);
$nbpara= $_POST['nbp']

    if (!empty($_POST["para<?php$nbpara?>"]) && !empty($_POST['choix']) && !empty($_POST['paraSuivant'])) {
        
        /*print_r($_POST);*/
        $para = $_POST['para'];
        $login = $_POST['choix'];
        $password = $_POST['paraSuivant'];
       
        $stmt = getDb()->prepare('INSERT INTO `paragraphe` (`Id_Hist`,`Text_Para`) VALUES (:para)');
        $stmt->execute(array(
            'para' => $para));
        
        $stmt2 = getDb()->prepare('INSERT INTO `choix` (`Id_Para`,`Id_Para`) VALUES (:para)');
        $stmt2->execute(array(
        'para' => $para));

    }
    else
    {
        $error = "Manque des infos";
    }


?>

<?php

    $Id_Hist = $_GET['id']; 

    for($n=1;$n<=$nbpara;$n++){
        $para=$_POST['para{$n[]}']
                $stmt3 = getDb()->prepare('INSERT INTO `paragraphe` (`Id_Hist`,`Id_Para`,`Text_Para`) VALUES (:idh,:idp,:para)');
                $stmt3->execute(array(
                'idh' => $Id_Hist,
                'idp' => $n,
                'para' => $
            ));
                for($j=1;$j<=3;$j++){

                }
                
                for($i=1;$i<=3;$i++){}
}?>