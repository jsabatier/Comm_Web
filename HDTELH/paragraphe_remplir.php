<?php
require_once "includes/functions.php";
session_start(); ?>


<!doctype html>
<html>

<?php require_once "includes/head.php"; ?>

<body>
    <div class="container">
    <?php require_once "includes/header.php";
    $Id_Hist = $_GET['id']; ?>

<div class="container rounded bg-dark p-5">
<h2 class="text-center">Ecriture des paragraphes</h2>

<?php
if (!empty($_POST['nbpara'])) {
    $nbpara= $_POST['nbpara'];?>
    <div class="well">
            <form class="form-signin form-horizontal" role="form" action="insert_paragraphe.php?id=<?=$Id_Hist?>&&nbp=<?=$nbpara?>" method="post">
            <div class="container m-2">
    <?php
    for($n=1;$n<=$nbpara;$n++){ ?>
                <p>Paragraphe <?=$n?></p>
                <div class="form-group">
                    <div class="textarea">
                    <input type="textarea" cols="140" rows="5" name="para<?=$n?>" class="form-control" placeholder="Entrez votre paragraphe" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                <?php
                for($j=1;$j<=3;$j++){ ?>
                
                    <div class="col">
                        <input type="text" name="choix<?=$j?>" class="form-control" placeholder="Entrez votre choix" required>
                    </div>
                    <div class="col">
                        <input type="number" name="paraSuivant<?=$j?>" class="form-control" required>
                    </div>
                <?php }?>
                <div class="form-group row">
                <?php /*for($i=1;$i<=3;$i++){ ?>
                
                    <div class="col">
                        <input type="number" name="paraSuivant<?=$i?>" class="form-control" required>
                    </div>
                <?php }*/}?>
                </div>
                <input type="submit" name ="creer" value="Créer"/>
                
            </form>
        </div>
    
    <?php
}
?>
<?php require_once "includes/footer.php"; ?>
      </div>
      </div>   
</div>
<?php require_once "includes/scripts.php"; ?>
</body>
</html>