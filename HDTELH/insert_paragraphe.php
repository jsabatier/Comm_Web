<?php

require_once "includes/functions.php";

//print_r($_POST);
/*$nbpara= $_POST['nbp']

    if (!empty($_POST["para<?php$nbpara?>"]) && !empty($_POST['choix']) && !empty($_POST['paraSuivant'])) {
        
        print_r($_POST);
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

*/
?>

<?php

    $Id_Hist = $_GET['id']; 
    $nbpara= $_GET['nbp'];

    for($n=1;$n<=$nbpara;$n++){
        $para=$_POST['para'.$n];
        //echo $_POST;
        foreach ($_POST as $k=>$p){
            echo $k." ".$p."     ";}
        echo "test";

        //print_r($para);
                $stmt3 = getDb()->prepare('INSERT INTO `paragraphe` (`Id_Hist`,`Id_Para`,`Text_Para`) VALUES (:idh,:idp,:para)');
                $stmt3->execute(array(
                'idh' => $Id_Hist,
                'idp' => $n,
                'para' => $para ));
                for($j=1;$j<=3;$j++){
                    $choix=$_POST['para'.$n.'choix'.$j];
                    $paraS=$_POST['para'.$n.'choix'.$j.'paraSuivant'.$j];

                    $stmt4 = getDb()->prepare('INSERT INTO `choix` (`Id_Hist`,`Id_Para`,`Id_Choix`,`Text_Choix`,Id_Para_Suivant) VALUES (:idh,:idp,:idc,:choix, :paraS)');
                $stmt4->execute(array(
                'idh' => $Id_Hist,
                'idp' => $n,
                'idc'=>$j,
                'choix' => $choix,
                'paraS' => $paraS ));
                }
                
    
}
//for($p=1;$p<=$nbpara)
redirect("index.php");
?>