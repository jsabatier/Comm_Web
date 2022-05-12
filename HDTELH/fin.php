<?php
require_once "includes/functions.php";
session_start();
?>

<!doctype html>
  <html>

  <?php
    $pageTitle = "Fin de l'histoire";
    require_once "includes/head.php";
    ?>

    <body>
      <div class="container">
        <?php require_once "includes/header.php"; ?>

        <div class="container rounded bg-dark p-2">
          <h2 class="text-center">Fin de l'histoire</h2>
          <div class="well m-2">
            Félicitations vous avez terminé l'histoire !<br/>
            <form name="finhist" method="post" action="index.php">
            <input type="submit" name="revenir" value="Revenir à l'accueil">
</form>
          </div>
          <?php require_once "includes/footer.php"; ?>
      </div>
      </div>

      <?php require_once "includes/scripts.php"; ?>
    </body>

  </html>

