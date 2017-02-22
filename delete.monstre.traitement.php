<?php

require_once('config.php');

// Suppression de la ligne à l'aide d'une requête préparée

$req = $bdd->prepare('DELETE FROM Personnage WHERE idPersonnage=' . $_GET['id']);
$req->execute(array($_POST['idMonstre']));

if($req){
    $_SESSION['email'] = '';
    header('Location: index.php');

}
// Redirection du visiteur vers la page du minichat
?>