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
        <li><a class="header_link" href="./portofolio-french.php">Portofolio</a></li>
        <li><a class="header_link" href="#">Contact</a></li>
      </ul>
    </header>
    <main>
      <h1>A propos de moi</h1>
      <section class="main-grid">
      <section class="container" id="left">
        <section class="container-title">
          <h2>Qui suis-je?</h2>
        </section>
        <section class="container-text">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </section>
      </section>

      <section class="container" id="center">
        <section class="container-title">
          <h2>Quels langages je maîtrise</h2>
        </section>
        <section class="container-text">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </section>
      </section>

      <section class="container" id="right">
        <section class="container-title">
          <h2>Pourquoi me faire confiance</h2>
        </section>
        <section class="container-text">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </section>
      </section>
    </section>
    </main>

    <footer class="footer">
        <p><a class="footer_link" href="../index.php">Langues</a></p>
        <p><a class="footer_link" href="./portofolio-french.php">Portofolio</a></p>
        <p><a class="footer_link" href="#">Contact</a></p>
    </footer>
  </section>
  <script src="../assets/script.js" type="text/javascript">

  </script>
  </body>
</html>
