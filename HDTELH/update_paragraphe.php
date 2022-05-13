<?php

require_once "includes/functions.php";
session_start();

?>

<?php
                
$Id_Hist = $_GET['id'];
$nbpara= $_GET['nbp'];


for($n=1;$n<=$nbpara;$n++){
$para=$_POST['para'.$n];
$stmt = getDb()->prepare('UPDATE `paragraphe` SET `Text_Para` = :para WHERE id = :id');
$stmt->execute(array('para' => $para,
'id' => $Id_Hist));}    

redirect("index.php");
?>