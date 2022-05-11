<?php
require_once "includes/functions.php";
session_start();
?>

<!doctype html>
<html>

<?php require_once "includes/head.php"; ?>

<body>
      <div class="container">
         <?php require_once "includes/header.php"; ?>


         <form name="NbPara" method="post" action="paragraphe_add">
            <fieldset>
               <legend><p>Vous allez désormais ajouter vos choix et le paragraphe correspondant à chaque fois<br/>Combien de paragraphes voulez vous écrire ?</p></legend>
               <br>
               <input type="number" name="nbpara" value=""><br>
               
               <input type="button" name="envoyer" value="Suivant">
            </fieldset>
         </form>
   <?php require_once "includes/footer.php"; ?>
      </div>

      <?php require_once "includes/scripts.php"; ?>
</body>

</html>