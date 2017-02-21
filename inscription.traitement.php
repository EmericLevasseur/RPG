<?php
    if(isset($_POST['nom']) AND
    isset($_POST['prenom']) AND
    isset($_POST['pseudo']) AND
    isset($_POST['email']) AND
    isset($_POST['descriptif']) AND
    isset($_POST['mdp']))
    {
        try
        {
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            $bdd = new PDO('mysql:host=localhost;dbname=phppoo', 'root', 'root',   $pdo_options);

            $req = $bdd->prepare('INSERT INTO Joueur(nom ,prenom, pseudo, email, descriptif, mdp) VALUES(:nom, :prenom, :pseudo, :email, :descriptif, :mdp)');
            $req->execute(array(
            'nom' => $_POST['nom'],
            'prenom' => $_POST['prenom'],
            'pseudo' => $_POST['pseudo'],
            'email' => $_POST['email'],
            'descriptif' => $_POST['descriptif'],
            'mdp' => $_POST['mdp']
            ));

            header('Location: inscription.php');
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    }

    if($_POST['nom'] == NULL)
    {
        echo 'Vous devez entrer un nom';
    }
    if($_POST['prenom'] == NULL)
    {
        echo 'Vous devez entrer un prenom';
    }
    if($_POST['pseudo'] == NULL)
    {
        echo 'Vous devez confirmer votre pseudo';
    }
    if($_POST['email'] == NULL)
    {
        echo 'Vous devez crééer votre mail';
    }
    if($_POST['descriptif'] == NULL)
    {
        echo 'Vous devez insérer un descriptif';
    }
    if($_POST['mdp'] == NULL)
    {
        echo 'Vous devez insérer un mot de passe';
    }
    header('Location: inscription.php');
?>
