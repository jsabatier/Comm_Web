<?php

require_once "includes/functions.php";

?>

<?php

    $Id_Hist = $_GET['id']; 
    $nbpara= $_GET['nbp'];

    for($n=1;$n<=$nbpara;$n++){
        $para=$_POST['para'.$n];
        
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

redirect("index.php");
?>