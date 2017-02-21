<?php

require_once('config.php');

// Suppression de la ligne à l'aide d'une requête préparée

$req = $bdd->prepare('DELETE FROM news WHERE idJoueur=idJoueur');
$req->execute(array($_POST['idJoueur']));


// Redirection du visiteur vers la page du minichat
header('Location: index.php');
?>