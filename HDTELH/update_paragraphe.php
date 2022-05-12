<?php

require_once "includes/functions.php";

?>

<?php

    $Id_Hist = $_GET['id']; 
    $nbpara= $_GET['nbp'];

    for($n=1;$n<=$nbpara;$n++){
        $para=$_POST['para'.$n];
        /*echo $_POST;
        foreach ($_POST as $k=>$p){
            echo $k." ".$p."     ";}*/

        print_r($para);
                $stmt3 = getDb()->prepare('Update `Text_Para` from `paragraphe` where (`Id_Hist`,`Id_Para`) VALUES (:idh,:idp)');
                $stmt3->execute(array(
                'idh' => $Id_Hist,
                'idp' => $n,
                'para' => $para ));
                for($j=1;$j<=3;$j++){
                    $choix=$_POST['choix'.$j];
                    $paraS=$_POST['paraSuivant'.$j];

                    $stmt4 = getDb()->prepare('INSERT INTO `choix` (`Id_Hist`,`Id_Para`,`Id_Choix`,`Text_Choix`,Id_Para_Suivant) VALUES (:idh,:idp,:idc,:choix, :paraS)');
                $stmt4->execute(array(
                'idh' => $Id_Hist,
                'idp' => $n,
                'idc'=>$j,
                'choix' => $choix,
                'paraS' => $paraS ));
                }
                
    
}
redirect("index.php");
?>