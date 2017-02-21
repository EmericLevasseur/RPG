<?php

require_once ('config.php');

    if(isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['pseudo']) AND isset($_POST['email']) AND isset($_POST['descriptif']) AND isset($_POST['mdp']))
    {
      if($_POST['nom'] == NULL)
      {
          echo 'Vous devez entrer un nom';
      } elseif($_POST['prenom'] == NULL)
      {
          echo 'Vous devez entrer un prenom';
      } elseif($_POST['pseudo'] == NULL)
      {
          echo 'Vous devez confirmer votre pseudo';
      } elseif($_POST['email'] == NULL)
      {
          echo 'Vous devez crééer votre mail';
      } elseif($_POST['descriptif'] == NULL)
      {
          echo 'Vous devez insérer un descriptif';
      } elseif($_POST['mdp'] == NULL)
      {
          echo 'Vous devez insérer un mot de passe';
      } else {
        $req = $bdd->prepare('INSERT INTO Joueur(nom ,prenom, pseudo, email, descriptif, mdp) VALUES(:nom, :prenom, :pseudo, :email, :descriptif, :mdp)');
        $req->execute(array(
        'nom' => $_POST['nom'],
        'prenom' => $_POST['prenom'],
        'pseudo' => $_POST['pseudo'],
        'email' => $_POST['email'],
        'descriptif' => $_POST['descriptif'],
        'mdp' => md5($_POST['mdp'])
        ));

        header('Location: login.php');
      }


    }




?>
