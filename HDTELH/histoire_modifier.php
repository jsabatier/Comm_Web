<?php
require_once "includes/functions.php";
session_start();

$Id_Hist = $_GET['id'];
$nbpara = $_GET['nbp'];

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
        <h2 class="text-center">Modification d'une histoire</h2>
        <div class="form-signin">
                <div class="form-group m-2">
                    <form class="form-signin form-horizontal" role="form" action="update_paragraphe.php?id=<?=$Id_Hist?>&&nbp=<?=$nbpara?>" method="post">
                <p class= "histoireContent">
                <?php
                    $nbpara;
                    foreach ($paragraphe as $para) { 
                        $nbpara = $nbpara +1;?>
                        <p>Paragraphe <?=$nbpara?></p>
                        <div class="col-sm-12">
                            <textarea class="form-control" rows="5" ><?= $para['Text_Para'] ?></textarea>
                        </div>
                        
                        
                    </br>    
                <?php } ?>
                    
                </p>
                </div>
        </div>
                <div class="form-groupe">
                <?php
                    /*foreach ($leschoix as $choix) { 
                        ?>
                        <a href="paragraphe.php?id=<?=  $histoire['Id_Hist'] ?>&idp=<?= $choix['Id_Para_Suivant']?>">
                        <?= $choix['Text_Choix'] ?>
                    </br>
                        </a>

                        
                <?php } */?>
                <input type="submit" name ="modif" value="Modifier"/>
                
            </form> 
            </div>
        </div>

    <?php require_once "includes/footer.php"; ?>
    </div>

<?php require_once "includes/scripts.php"; ?>
</body>

</html>
