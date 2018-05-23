
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'controller/conditions.php';
require 'controller/class/form_class.php';
require 'controller/class/html_class.php';
$form= new Form();
$html=new HTML();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php
    $html->charset('utf-8');
    $html->css('assets/style-main.css');
    $html->viewport();
     ?>
     <link href="https://fonts.googleapis.com/css?family=Tajawal" rel="stylesheet">
    <title class="index_title">Choose your language</title>
  </head>
  <body>
    <section class="wrapper">
      <h1>Please choose your language</h1>
      <section class="index_navigation">
        <a  class="french" href="views/french_page.php">Français</a>
        <a class="english" href="views/english_page.php">English</a>
      </section>

       <?php
          // $form->form_start('form_index','index.php');
          //  $form->input_submit('french_submit','French');
          //  $form->input_submit('english_submit','English');
          //  $form->form_end();
       ?>
    </section>
  </body>
</html>
