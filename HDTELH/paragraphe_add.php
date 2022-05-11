<?php 
require_once "includes/functions.php";
session_start();

if(isUserConnected()) {
    
    $Id_Hist = $_GET['id'];
    $para1 = escape($_POST['para1']);

    $stmt2 = getDb()->prepare('insert into paragraphe
        (Text_Para,)
        values (?, ?, ?)');
        $stmt->execute(array($title, $shortDescription, $image));
        redirect("paragraphe.php");
}

?>