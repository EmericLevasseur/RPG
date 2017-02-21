<?php
require_once ('config.php');

//var_dump(!empty( $_POST['connexion']));

if ( empty( $_POST['connexion'] ) ) {

	$motdepasse=$email=$password = '';
} elseif ( !empty( $_POST['connexion']) ) {

	$email					=	( !empty( $_POST['email'] ) )		?	htmlentities( $_POST['email'] )		: '';
	$password				=	( !empty( $_POST['mdp'] ) )	?	md5(htmlentities( $_POST['mdp'] ))				: '';
	$aError					=	array();

	if( empty($email) ) {
	   $aError[]					=	'Veuillez saisir votre email';
	} elseif (!(filter_var($email, FILTER_VALIDATE_EMAIL))) {
	   $aError[]					=	'Veuillez vérifier la synthaxe de votre adresse email';
	}

	if (empty($password)) {
	   $aError[]					=	'Veuillez saisir votre mot de passe';
	}

	if( empty ($aError) ){
    // Récupération de l'utilisateur
	$sUser						=	'
		SELECT *
		FROM Joueur
		where email = :email
		and mdp = :mdp
	';
	$aParamUser				=	[
		':email'			=>	$email,
		':mdp'				=>	$password
	];
// ---
// Préparation et execution de la requête
	$oQuery					=	$bdd->prepare( $sUser );
	$oQuery->execute( $aParamUser );
	$aUser					=	$oQuery->fetch();
		if ( $email == $aUser['email']
    && $password == $aUser['mdp'] )
    {
      //var_dump($aUser['user_mdp'],$aUser['user_email'],$email,$password);exit();
			$_SESSION['id']= $aUser['idJoueur'];
			$_SESSION['email'] = $email;
			$_SESSION['pseudo'] = $aUser['pseudo'];
			$_SESSION['nom'] = $aUser['nom'];
			$_SESSION['prenom'] = $aUser['prenom'];
			$_SESSION['descriptif'] = $aUser['descriptif'];
      
			header('Location: index.php');
		} else {
			$aError[]	=	 ' Votre email ou mot de passe est invalide ';
		}
	}

}
