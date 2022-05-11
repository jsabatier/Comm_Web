<?php
require_once "includes/functions.php";
session_start();

if (isUserConnected()) {
    
    if (isset($_POST['title'])) {
        // the movie form has been posted : retrieve movie parameters
        //$title = escape($_POST['title']);
        //$shortDescription = escape($_POST['shortDescription']);
        
        $title = $_POST['title'];
        $shortDescription = $_POST['shortDescription'];
        
        $stmt = getDb()->prepare('INSERT INTO `liste_histoire` (`Titre_Hist`,`Resume_Hist`) VALUES (?,?)');
        $stmt->execute(array($title,$shortDescription ));

        $tmpFile = $_FILES['image']['tmp_name'];
        if (is_uploaded_file($tmpFile)) {
            // upload movie image
            $image = basename($_FILES['image']['name']);
            $uploadedFile = "images/$image";
            move_uploaded_file($_FILES['image']['tmp_name'], $uploadedFile);
        }
        
        // insert movie into BD
        $stmt = getDb()->prepare('insert into liste_histoire
        (Titre_Hist, Resume_Hist, Im_Hist)
        values (?, ?, ?)');
        $stmt->execute(array($title, $shortDescription, $image));

        $histoire = getDb()->prepare ('select Id_Hist from liste_histoire where Titre_Hist=?');
        $histoire->execute(array($title));
        $rq = $histoire->fetch();
      
        redirect("paragraphe_add.php?id={$rq['Id_Hist']}");

      }
    ?>

  <!doctype html>
  <html>

  <?php
    $pageTitle = "Ajout d'une histoire";
    require_once "includes/head.php";
    ?>

    <body>
      <div class="container">
        <?php require_once "includes/header.php"; ?>

          <h2 class="text-center">Ajout d'une histoire</h2>
          <div class="well m-2">
            <form class="form-horizontal" role="form" enctype="multipart/form-data" action="histoire_add.php" method="post">
              <input type="hidden" name="id" value="<?= $Id_Hist?>">
              <div class="form-group">
                <label class="col-sm-4 control-label">Titre</label>
                <div class="col-sm-6">
                  <input type="text" name="title" class="form-control" placeholder="Entrez le titre de l'histoire" required autofocus>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Résumé de l'histoire</label>
                <div class="col-sm-6">
                  <textarea name="shortDescription" class="form-control" placeholder="Entrez son résumé" required>
                  </textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Image</label>
                <div class="col-sm-4">
                  <input type="file" name="image" />
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-4 col-sm-offset-4">
                  <button type="submit" class="btn btn-default btn-primary"><span class="glyphicon glyphicon-save"></span> Enregistrer</button>
                </div>
              </div>
            </form>
          </div>

          <?php require_once "includes/footer.php"; ?>
      </div>

      <?php require_once "includes/scripts.php"; ?>
    </body>

  </html>

  <?php } else { ?>
    <html>

    <body>
      <img src="https://sd.keepcalm-o-matic.co.uk/i/don-t-mess-with-me-bro.png" />
    </body>

    </html>
    <?php } ?>