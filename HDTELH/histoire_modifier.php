<?php
require_once "includes/functions.php";
session_start();

$Id_Hist = $_GET['id'];
$stmt = getDb()->prepare('select * from liste_histoire where Id_Hist=?');
$stmt->execute(array($Id_Hist));
$histoire = $stmt->fetch(); // Access first (and only) result line

$para = getDb()->prepare('select * from paragraphe where Id_Hist=?');
$para->execute(array($Id_Hist));
$paragraphe = $para->fetchAll();

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

        <div class="container rounded bg-dark p-2">
            
                <div class="m-2">
                <p class= "histoireContent">
                <?php
                    foreach ($paragraphe as $para) { 
                        ?>
                        <textarea cols="140" rows="5"><?= $para['Text_Para'] ?></textarea>
                        <?= $choix['Text_Choix'] ?>
                    </br>    
                <?php } ?>
                    
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
