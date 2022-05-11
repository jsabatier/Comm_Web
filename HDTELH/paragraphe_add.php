<?php /*
require_once "includes/functions.php";
session_start();

if(isUserConnected()) {

    $Id_Hist = $_GET['id'];
    $para1 = escape($_POST['para1']);

    $stmt2 = getDb()->prepare('insert into paragraphe
        (Text_Para,)
        values (?, ?, ?)');
        $stmt->execute(array($title, $shortDescription, $image));
        redirect("paragraphe.php");
}*/
?>

<?php
require_once "includes/functions.php";
session_start();
?>


<!doctype html>
<html>

<?php require_once "includes/head.php"; 
$Id_Hist = $_GET['id'];?>

<body>
      <div class="container">
         <?php require_once "includes/header.php"; ?>


         <form name="NbPara" method="post" action="paragraphe_remplir.php?id=<?=$Id_Hist?>">
            <fieldset>
               <legend><p>Vous allez désormais ajouter vos choix et le paragraphe correspondant à chaque choix<br/>Combien de paragraphes voulez-vous écrire ?</p></legend>
               <br>
               <input type="number" name="nbpara" value=""><br>

               <input type="submit" name="envoyer" value="Suivant">
            </fieldset>
         </form>
   <?php require_once "includes/footer.php"; ?>
      </div>

      <?php require_once "includes/scripts.php"; ?>
</body>

</html>

