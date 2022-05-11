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
                    <input type="textarea" cols="140" rows="5" name="para<?php$n?>" class="form-control" placeholder="Entrez votre paragraphe" required autofocus>
                    </div>
                </div>
                <div class="form-group row">
                <?php
                for($j=1;$j<=3;$j++){ ?>
                
                    <div class="col">
                        <input type="text" name="choix" class="form-control" placeholder="Entrez votre choix" required>
                    </div>
                <?php }?>
                <div class="form-group row">
                <?php for($i=1;$i<=3;$i++){ ?>
                
                    <div class="col">
                        <input type="number" name="paraSuivant" class="form-control" required>
                    </div>
                <?php }}?>
                </div>
                <button type="submit" name ="creer" class="btn btn-default btn-dark">Créer</button>
            </form>
        </div>
    
    <?php
}
?>
</div>
</body>
</html>