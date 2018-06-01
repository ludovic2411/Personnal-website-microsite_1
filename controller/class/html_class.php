<?php
class HTML{
  public function charset($charset){
    echo "<meta charset='$charset'>";
  }
  public function css($link){
    echo "<link rel='stylesheet' href='$link'>";
  }
  public function viewport(){
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
  }
  public function description(){
    echo '<meta name="description" content="Personnal website of Ludovic Ceccotti">';
  }
  public function author(){
    echo '<meta name="author" content="Ludovic Ceccotti">';
  }
  public function keywords(){
    echo ' <meta name="keywords" content="HTML,CSS,Webdevelopper,website,JavaScript">';
  }
}
 ?>
