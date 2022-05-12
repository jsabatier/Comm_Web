<?php
require_once "includes/functions.php";
session_start(); ?>

<!doctype html>
<html>

<?php require_once "includes/head.php";
?>

<body>
      <div class="container">
         <?php require_once "includes/header.php"; ?>

         <div class="container rounded bg-dark p-5">

         <form name="inscription" method="post" action="insert.php">
            <fieldset>
               <legend><h2>Inscription</h2></legend>
               Nom<br>
               <input type="text" name="nom" value=""><br>
               Login<br>
               <input type="text" name="login" value=""><br>
               Mot de passe<br>
               <input type="password" name="password" value=""><br>
               Vous voulez être : <br>
               <select name="niv">
                  <option value="1">Admin</option>
                  <option value="0">Lecteur</option>
               </select>
            </br>
            </br>
               <input type="submit" name="envoyer" value="S'inscrire">
            </fieldset>
         </form>

         <?php require_once "includes/footer.php"; ?>
</div>
      </div>

      <?php require_once "includes/scripts.php"; ?>
</body>

</html>
