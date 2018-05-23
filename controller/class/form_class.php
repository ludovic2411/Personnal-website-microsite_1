<?php
class Form{
  public function form_start($class,$action){
    echo "<form class='$class' action='$action' method='post'>";
  }
  public function form_end(){
    echo "</form>";
  }
  public function input_text($name, $title){
    echo "<input type='text' name='$name' value='$title'>";
  }
  public  function input_submit($name, $title){
    echo "<input type='submit' name='$name' value='$title'>";
  }
}
 ?>
