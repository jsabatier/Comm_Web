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

        <?php
         foreach ($histoires as $histoire) { ?>
            <article>
                <img src= "images/<?=$histoire['Im_Hist']?>" alt="Image de Patate" style="width:200px; height:auto">
                <h3><a class= "" href= "histoire.php?id=<?=  $histoire['Id_Hist'] ?>"><?=  $histoire['Titre_Hist'] ?></a></h3>
                <p class= "histoireContent"><?=  $histoire['Resume_Hist'] ?></p>
            </article>
        <?php } ?>

        <?php require_once "includes/footer.php"; ?>
    </div>

    <?php require_once "includes/scripts.php"; ?>
</body>

</html>