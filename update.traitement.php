<?php
require_once ('config.php');

$sPersonnage =
'
select *
from personnage
where user_id = "'.$_GET['id'].'"
';
$oMoi				=	$bdd->query($sMoi);
$aMoi				=	$oMoi->fetchAll(PDO::FETCH_ASSOC);

if(!empty($_POST['modifier'])){
  $sModifier = '
UPDATE Users
SET user_pseudo = :pseudo,
  user_email = :email
WHERE user_id = :id
  ';
  $aParamUser			=	[
  ':pseudo'			=>	$_POST['pseudo'],
  ':email'				=>	$_POST['email'],
  ':id'				=>	$_SESSION['id']
  ];

  $oModifier	=	$bdd->prepare ( $sModifier );
  $bReturn = $oModifier->execute( $aParamUser );
  if ($bReturn == 0 ) {
    echo 'ok';
  } else {

    header('Location: profil.php');
  }
}
