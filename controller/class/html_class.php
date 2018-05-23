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
}
 ?>
