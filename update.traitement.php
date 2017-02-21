<?php
require_once ('config.php');

$sJoueur =
'
select *
from Joueur
where idJoueur = "'.$_SESSION['id'].'"
';
$oJoueur				=	$bdd->query($sJoueur);
$aJoueur				=	$oJoueur->fetchAll(PDO::FETCH_ASSOC);

if(!empty($_POST['modifier'])){
  $sModifier = '
UPDATE Joueur
SET nom = :nom, prenom = :prenom, pseudo = :pseudo, descriptif = :descriptif, email = :email
WHERE idJoueur = :id
  ';
  $aParamUser			=	[
  ':nom'			    =>	$_POST['nom'],
  ':prenom'				=>	$_POST['prenom'],
  ':pseudo'				=>	$_POST['pseudo'],
  ':descriptif'		=>	$_POST['descriptif'],
  ':email'				=>	$_POST['email'],
  ':id'				    =>	$_SESSION['id']
  ];

  $oModifier	=	$bdd->prepare ( $sModifier );
  $bReturn = $oModifier->execute( $aParamUser );
  if ($bReturn == 0 ) {
    echo 'erreur';

  } else {
    $_SESSION['pseudo'] = $_POST['pseudo'];
    $_SESSION['nom'] = $_POST['nom'];
    $_SESSION['prenom'] = $_POST['prenom'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['descriptif'] = $_POST['descriptif'];
    header('Location: index.php');
  }
}
