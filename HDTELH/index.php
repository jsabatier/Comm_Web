<?php
require_once "includes/functions.php";
session_start();

// Retrieve all histoires
$histoires = getDb()->query('select * from liste_histoire order by Id_Hist desc'); 
?>

<!doctype html>
<html>

<?php require_once "includes/head.php"; ?>

<body>
    <div class="container">
        <?php require_once "includes/header.php"; ?>
        
        <div class ="container m2">
        <?php
         foreach ($histoires as $histoire) { ?>
            <div class="jumbotron">
            <div class="row">
                <div class="col-md-5 col-sm-7">
                <img src= "images/<?=$histoire['Im_Hist']?>" alt="<?=$histoire['Im_Hist']?>" style="width:200px; height:auto">
                </div>
                <div class="col-md-7 col-sm-5">
                <h3><a class= "" href= "histoire.php?id=<?=  $histoire['Id_Hist'] ?>"><?=  $histoire['Titre_Hist'] ?></a></h3>
                <p class= "histoireContent"><?=  $histoire['Resume_Hist'] ?></p>
                </h2>
            </div>
        </div>
            
        <?php } ?>
        
        <?php require_once "includes/footer.php"; ?>
    </div>

    <?php require_once "includes/scripts.php"; ?>
</body>

</html>