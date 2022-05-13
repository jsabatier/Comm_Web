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
</br>
Si le paragraphe amène à la fin de l'histoire, veuillez rentrer un choix avec pour paragraphe suivant 0.
</br>
Vous pouvez ajouter au maximum 3 choix.
</br>
<?php
if (!empty($_POST['nbpara'])) {
    $nbpara= $_POST['nbpara'];?>
    
    <div class="well p-2">
    <form class="form-signin form-horizontal" role="form" action="insert_paragraphe.php?id=<?=$Id_Hist?>&&nbp=<?=$nbpara?>" method="post">
    <div class="container m-2">
    <?php
    for($n=1;$n<=$nbpara;$n++){ ?>
        <p>Paragraphe <?=$n?></p>
        <div class="form-group m-2">
        <div class="textarea">
        <input type="textarea" cols="140" rows="5" name="para<?=$n?>" class="form-control" placeholder="Entrez votre paragraphe" required autofocus>
        </div>
        </div>
        
        <?php
        for($j=1;$j<=3;$j++){ ?>

            <div class="form-group row p-2">
            <div class="col">
            <input type="text" name="para<?=$n?>choix<?=$j?>" class="form-control" placeholder="Entrez votre choix" >
            </div>
            <div class="col">
            <input type="number" name="para<?=$n?>choix<?=$j?>paraSuivant<?=$j?>" class="form-control" placeholder="Entrez le N° du paragraphe suivant" min="0">
            </div>
            </div>
            <?php }?>
            <?php } ?>
            </div>
            <?php
        }
?>
            <div class="container text-center">
                <input type="submit" name ="creer" value="Créer" class="btn btn-default btn-primary"/>
            </div>  
            </form>
        </div>
    
    
<?php require_once "includes/footer.php"; ?>
      </div>
      </div>   
</div>
<?php require_once "includes/scripts.php"; ?>
</body>
</html>