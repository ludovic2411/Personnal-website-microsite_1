<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "../controller/class/html_class.php";
require "../controller/conditions.php";
 $html=new HTML();

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <?php
     $html->charset('utf-8');
     $html->viewport();
    $html->css('../assets/style-main.css')
    ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Tajawal" rel="stylesheet">
    <title>Ludovic Ceccotti junior webdevelopper</title>
  </head>
  <body>
    <section class="wrapper">
    <header class="header">
      <i class="fas fa-bars"></i>
      <ul>
        <li><a class="header_link" href="../index.php">Langues</a></li>
        <li><a href="http://localhost:8888/microsite_1/views/french_page.php">A propos de moi</a></li>
        <li><a class="header_link" href="./portofolio-french.php">Portofolio</a></li>
        <li><a class="header_link" href="./contact_french.php">Contact</a></li>
      </ul>
    </header>
