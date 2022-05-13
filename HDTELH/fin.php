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
          </br>
            Félicitations vous avez terminé l'histoire !<br/>
          </br>
            <div class="col-md-5 col-sm-7">
                <img src= "images/Chat_triomphant.jpg" alt="Chat triomphant avec marqué vers l'infini et l'au-dela au dessus de lui" title="Chat triomphant" style="width:200px; height:auto">
            </div>
          <div class="container p-2">
            <form name="finhist" method="post" action="index.php">
            <input type="submit" name="revenir" value="Revenir à l'accueil">
            </form>
          </div>
          </div>
          <?php require_once "includes/footer.php"; ?>
      </div>
      </div>

      <?php require_once "includes/scripts.php"; ?>
    </body>

  </html>