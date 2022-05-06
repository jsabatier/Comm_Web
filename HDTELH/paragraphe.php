<?php
require_once "includes/functions.php";
session_start();

$Id_Hist = $_GET['id'];
$stmt = getDb()->prepare('select * from liste_histoire where Id_Hist=?');
$stmt->execute(array($Id_Hist));
$histoire = $stmt->fetch(); // Access first (and only) result line


$Id_Para =$_GET['idp'];
$para = getDb()->prepare('select * from paragraphe where Id_Para=?');
$para->execute(array($Id_Para));
$paragraphe = $para->fetch();

$Id_Choix =$_GET['idc'];
$choix = getDb()->prepare('select * from choix where Id_Hist=? and Id_Para=?');
$choix->execute(array($Id_Choix));
$leschoix = $choix->fetch();
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

        <div class="jumbotron">
            <div class="row">
                <div class="col-md-5 col-sm-7">
                <p class= "histoireContent">
                    <?= $paragraphe['Text_Para'] ?>
                </p>
                </div>
                <div>
                <?php
                    foreach ($leschoix as $choix) { 
                        if($choix['Id_Hist']==$Id_Hist && $choix['Id_Para']==$Id_Para){?>
                        <article>
                        <?php $choix['Text_Choix'] ?>
                        </article>

                        <?php
                        }
                        ?>
                        
                <?php } ?>
                </div>
                
            </div>
        </div>

    <?php require_once "includes/footer.php"; ?>
    </div>

<?php require_once "includes/scripts.php"; ?>
</body>

</html>