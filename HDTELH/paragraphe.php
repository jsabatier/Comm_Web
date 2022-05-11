<?php
require_once "includes/functions.php";
session_start();

$Id_Hist = $_GET['id'];
$stmt = getDb()->prepare('select * from liste_histoire where Id_Hist=?');
$stmt->execute(array($Id_Hist));
$histoire = $stmt->fetch(); // Access first (and only) result line


$Id_Para =$_GET['idp'];
$para = getDb()->prepare('select * from paragraphe where Id_Hist=? and Id_Para=?');
$para->execute(array($Id_Hist,$Id_Para));
$paragraphe = $para->fetch();

//$Id_Choix =$_GET['idc'];
$choix = getDb()->prepare('select * from choix where Id_Hist=? and Id_Para=?');
$choix->execute(array($Id_Hist,$Id_Para));
$leschoix = $choix->fetchAll();
?>

<!doctype html>
<html>

<?php 
$pageTitle = $histoire['Titre_Hist'];
require_once "includes/head.php";
?>

<body>
    <div class="container">
        <?php require_once "includes/header.php"; ?>

        <div class="container rounded bg-white">
            
                <div class="m-2">
                <p class= "histoireContent">
                    <?= $paragraphe['Text_Para'] ?>
                </p>
                </div>
                <div>
                <?php
                    foreach ($leschoix as $choix) { 
                        ?>
                        <a href="paragraphe.php?id=<?=  $histoire['Id_Hist'] ?>&idp=<?= $choix['Id_Para_Suivant']?>">
                        <?= $choix['Text_Choix'] ?>
                    </br>
                        </a>

                        
                <?php } ?>
                </div>
        </div>

    <?php require_once "includes/footer.php"; ?>
    </div>

<?php require_once "includes/scripts.php"; ?>
</body>

</html>


