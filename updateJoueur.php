<?php
require_once 'libs/PHPMailer/PHPMailerAutoload.php';
require_once 'config.php';
include 'update.traitement.php';
if (isset($_SESSION['email']) && (!empty($_SESSION['email']))) {
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <p><?php echo $_SESSION['nom']; ?></p>
    <p><?php echo $_SESSION['prenom']; ?></p>
    <form class="" action="updateJoueur.php" method="post"><br></br>

    <label for="nom">Nom :</label>
    <input type="text" name="nom" value="<?php echo $aJoueur[0]['nom'] ?>" placeholder="Nom" id="nom"><br></br>

    <label for="prenom">Prenom :</label>
    <input type="text" name="prenom" value="<?php echo $aJoueur[0]['prenom'] ?>"  placeholder="Prenom" id="prenom"><br></br>

    <label for="pseudo">Pseudo :</label>
    <input type="text" name="pseudo" value="<?php echo $aJoueur[0]['pseudo'] ?>"  placeholder="Pseudo" id="pseudo"><br></br>

    <label for="email">Email :</label>
    <input type="email" name="email" value="<?php echo $aJoueur[0]['email'] ?>"  placeholder="Email" id="email"><br></br>

    <label for="descriptif">Descriptif :</label>
    <textarea name="descriptif" rows="8" cols="80"  placeholder="Descriptif" id="descriptif"><?php echo $aJoueur[0]['descriptif'] ?></textarea><br></br>
    <input type="submit" name="modifier" value="Modifier"><br></br>
    </form>

    <?php } else {
      header('Location: login.php');
    }?>
  </body>
</html>
