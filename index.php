<?php

require_once 'libs/PHPMailer/PHPMailerAutoload.php';
require_once 'config.php';
if (isset($_SESSION['email'])) {

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
      <p><?php echo $_SESSION['nom']; ?></p>
      <p><?php echo $_SESSION['prenom']; ?></p>
      <form class="" action="index.php" method="post"><br></br>
      <input type="text" name="nom" value="" placeholder="Nom"><br></br>
      <input type="text" name="prenom" value=""  placeholder="Prenom"><br></br>
      <input type="text" name="pseudo" value=""  placeholder="Pseudo"><br></br>
      <input type="email" name="email" value=""  placeholder="Email"><br></br>
      <textarea name="descriptif" rows="8" cols="80"  placeholder="Descriptif"></textarea><br></br>
      <input type="submit" name="envoyer" value="Envoyer"><br></br>
      </form>

      <?php } else {
        header('Location: login.php');
      }?>
    </body>
  </html>
