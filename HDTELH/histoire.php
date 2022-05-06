<?php
require_once "includes/functions.php";
session_start();

$Id_Hist = $_GET['id'];
$stmt = getDb()->prepare('select * from liste_histoire where Id_Hist=?');
$stmt->execute(array($Id_Hist));
$histoire = $stmt->fetch(); // Access first (and only) result line

$para = getDb()->prepare('select * from paragraphe where Id_Hist=?');
$para->execute(array($Id_Hist));
$paragraphe = $para->fetch();

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
                    <img class="img-responsive movieImage" src="images/<?= $histoire['Im_Hist'] ?>" title="<?= $histoire['Titre_Hist'] ?>" style="width:200px; height:auto" />
                <br/>
                </div>
                <div class="col-md-7 col-sm-5">
                    <h2><?= $histoire['Titre_Hist'] ?></h2>
                    <p><small><?= $histoire['Resume_Hist'] ?></small></p>
                </h2>
            </div>
        </div>
    </div>

    <?php require_once "includes/footer.php"; ?>
</div>

<?php require_once "includes/scripts.php"; ?>
</body>

</html>