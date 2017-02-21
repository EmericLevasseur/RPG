<?php include 'login.traitement.php'; ?>

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
    <div class="container">
      <div class="col-lg-12 formulaire">

        <form method="post" id="form" autocomplete="off" action="login.php" >
          <h1 id="titre">Login</h1>
          <?php
          //var_dump($aError);exit();
          if ( !empty($aError) ) {
            ?>
          <div class="erreurs">
            <?php
              foreach( $aError as $iError ) {
                ?> <div class="logerreur"><?php echo $iError; ?> </div> <?php
              }
            ?>
          </div>
          <?php } ?>
          <div class="col-lg-6 col-lg-offset-3 champ">
            <input type="email" id="email" name="email" placeholder="Adresse Email"/>
          </div>
          <div class=" col-lg-6 col-lg-offset-3 champ">
            <input type="password" id="mdp" name="mdp" placeholder="Mot de Passe"/>
          </div>
          <div class=" col-lg-4 col-lg-offset-4 bouton">
            <input id="connexion" type="submit" name="connexion" value="Connexion" />
          </div>

        </form>
        <div id="blank" class=" col-lg-4 col-lg-offset-4 bouton">
          <button type="button"  class="btn btn-info"><a href="inscription.php">Pas de compte ?</a></button>
        </div>
      </div>
    </div>

  </body>
</html>
