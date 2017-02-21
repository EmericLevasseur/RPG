<?php

require_once 'libs/PHPMailer/PHPMailerAutoload.php';

if($_POST['envoyer']){

  $m = new PHPMailer;
  $m->isSMTP();
  $m->SMTPAuth = true;

  $m->Host = 'smtp.gmail.com';
  $m->Username = 'leroy95.corentin@gmail.com';
  $m->Password = 'alundiel';
  $m->SMTPSecure = 'ssl';
  $m->Port = 465;

  $m->From ='leroy95.corentin@gmail.com';
  $m->FromName ='Corentin Leroy';
  $m->addReplyTo('reply@gmail.com', 'Reply address');
  $m->addAddress('leroy95.corentin@gmail.com', 'Corentin Leroy');

 $m->isHTML(true);

 //$m->addAttachment('files/panda.jpg', 'panda.jpg');
 $m->Subject = 'Here is an email from ' . $_POST['nom'] . ' ' . $_POST['prenom'] . ' Alias ' . $_POST['pseudo'];
 $m->Body = '<p>My email is ' . $_POST['email'] . '</p><p>This is a new paragraph <strong>and I\'m bold</strong></p>';
 $m->AltBody =  $_POST['descriptif'];
 if($m->send()){
   echo 'Email sent.';
 }else{
   echo 'error';
 }

}
?>

<form class="" action="index.php" method="post"><br></br>
<input type="text" name="nom" value="" placeholder="Nom"><br></br>
<input type="text" name="prenom" value=""  placeholder="Prenom"><br></br>
<input type="text" name="pseudo" value=""  placeholder="Pseudo"><br></br>
<input type="email" name="email" value=""  placeholder="Email"><br></br>
<textarea name="descriptif" rows="8" cols="80"  placeholder="Descriptif"></textarea><br></br>
<input type="submit" name="envoyer" value="Envoyer"><br></br>
</form>
