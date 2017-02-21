<?php
require_once 'config.php';
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form class="" action="index.html" method="post">
      <legend>Création d'un personnage </legend>
      <br>
      <label for="nom">Nom : </label>
      <input type="text" name="nom" value="" id="nom"><br></br>

      <label for="pdd">Point de défense :</label>
      <input type="text" name="pdd" value="" id="pdd"><br></br>

      <label for="pdm">Point de magie :</label>
      <input type="text" name="pdm" value="" id="pdm"><br></br>

      <label for="pda">Point d'attaque :</label>
      <input type="text" name="pda" value="" id="pda"><br></br>

      <label for="pdv">Point de vie :</label>
      <input type="text" name="pdv" value="" id="pdv"><br></br>

      <label for="pdvit">Point de vitesse :</label>
      <input type="text" name="pdvit" value="" id="pdvit"><br></br>

      <label for="or">Bourse d'or :</label>
      <input type="text" name="or" value="" id="or"><br></br>

      <label for="joueur">Nom d joueur :</label>
      <input type="text" name="joueur" value="" id="joueur"><br></br>

      <label for="classe">Classe du personnage :</label>
      <input type="text" name="classe" value="" id="classe"><br></br>

      <input type="submit" name="enregistrer" value="Enregistrer">



    </form>
  </body>
</html>
