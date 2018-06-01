<?php
require 'class/sanitize_class.php';
$sanitize= new Sanitizer();

if (isset($_POST['genre']) && !empty($_POST['genre'])) {
  $genre=$sanitize->sanitize_string($_POST['genre']);
}else {
  $erreur="Indiquez votre genre";
}

if (isset($_POST['nom']) && !empty($_POST['nom'])) {
  $nom=$sanitize->sanitize_string($_POST['nom']);
}else {
  $erreur="Veuillez indiquer votre nom";
}

if (isset($_POST['prenom'])&& !empty($_POST['prenom'])) {
  $prenom=$sanitize->sanitize_string($_POST['prenom']);
}else {
  $erreur="Veuillez indiquer votre prénom";
}

if (isset($_POST['email']) && !empty($_POST['email'])) {
  $email=$sanitize->sanitize_email($_POST['email']);
}else {
  $erreur="Indiquez votre adresse email";
}

if (isset($_POST['sujet']) && !empty($_POST['sujet'])) {
  $sujet=$sanitize->sanitize_string($_POST['sujet']);
}

if (isset($_POST['contact_description']) && !empty($_POST['contact_description'])){
  $description=$sanitize->sanitize_string($_POST['contact_description']);
}

if (isset($_POST['contact_description']) && !empty($_POST['contact_description'])&& isset($_POST['sujet']) && !empty($_POST['sujet'])
 && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['genre']) && !empty($_POST['genre']) && isset($_POST['prenom'])&& !empty($_POST['prenom'])
&& isset($_POST['nom']) && !empty($_POST['nom'])) {

  $to='ludovic.ceccotti@gmail.com';
  $subject=$sujet;
  $message=$description;
  $headers = array(
    'From' => $email,
    'Reply-To' => 'ludovic.ceccotti@gmail.com',
    'X-Mailer' => 'PHP/' . phpversion()
  );
  mail($to,$subject,$message,implode("\r\n", $headers));

   session_start();
   $_SESSION['genre']=$genre;
   $_SESSION['nom']=$nom;
   $_SESSION['prenom']=$prenom;
   $_SESSION['email']=$email;
   $_SESSION['sujet']=$sujet;
   $_SESSION['description']=$description;
   header("location: ../views/merci.php");
}else{
  $erreur="Veuillez compléter tous les champs";
}

if (isset($_POST['retour'])) {
  header("location:../index.php");
}

 ?>
