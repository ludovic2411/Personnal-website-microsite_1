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
     $html->css('../assets/style-main.css');
     $html->viewport();
      ?>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
     <link href="https://fonts.googleapis.com/css?family=Tajawal" rel="stylesheet">
     <title>Portofolio</title>
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
       <h1>Mes réalisations</h1>
       <section class="portofolio-main">
         <section class="portofolio-left">
           <h2><i class="fab fa-html5"></i> HTML</h2>
          <p><a href="https://ludovic2411.github.io/my-resume/index.html"><i class="fab fa-html5"></i> Mon curriculum vitae en anglais</a></p>
          <p id><a href="https://ludovic2411.github.io/Mon-cv/Mon-cv.html"><i class="fab fa-html5"></i> Mon curriculum vitae en français</a></p>
         </section>
         <section class="portofolio-right">
           <p>Un curriculum vitae en HTML et CSS qui utilise les grilles CSS pour la mise en page. Il comporte
           quelques animations css et possède un design responsive.</p>
           <p> Un curriculum vitae réalisé au début de ma formation
             découpé en sections et structuré à l'aide de float. Design non responsive.
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
