<?php
require_once "includes/functions.php";
session_start();

if (isUserConnected()){
    $Id_Hist = $_GET['id'];


    //jsp si il faut fetch ou pas

    $stmt = getDb()->prepare('select * from paragraphe where Id_Hist=?');
    $stmt->execute(array($Id_Hist));
    $para = $stmt->fetch(); // Access first (and only) result line

    $stmt1 = getDb()->prepare('select * from choix where Id_Hist=?');
    $stmt1->execute(array($Id_Hist));
    $choix = $stmt->fetch();
    



    $stmt2 = getDb()->prepare('delete from liste_histoire where Id_Hist=?');
    $stmt2->execute(array($Id_Hist));
    
    $stmt3 = getDb()->prepare('delete from paragraphe where Id_Hist=?');
    $stmt3->execute(array($para['Id_Hist']));
    
    $stmt4 = getDb()->prepare('delete from choix where Id_Hist=?');
    $stmt4->execute(array($choix['Id_Hist']));
    


//ici c'est sans fetch mais je peux pas le tester

    /* 
    
    $stmt2 = getDb()->prepare('delete from liste_histoire where Id_Hist=?');
    $stmt2->execute(array($Id_Hist));
    
    $stmt3 = getDb()->prepare('delete from paragraphe where Id_Hist=?');
    $stmt3->execute(array($Id_Hist));
    
    $stmt4 = getDb()->prepare('delete from choix where Id_Hist=?');
    $stmt4->execute(array($Id_Hist)); */




    redirect("index.php");
}
