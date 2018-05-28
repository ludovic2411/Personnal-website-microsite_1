
document.getElementsByTagName('fieldset')[0].style.opacity="0";

function back_contact(){
  //document.querySelector('#left').style.animation="transform_opacity 3s"
  window.location.href ="../views/portofolio-french.php";
}

function stop_contact(){
  document.getElementsByTagName('fieldset')[0].style.opacity="0";
}

function play_contact(){
  document.getElementsByTagName('fieldset')[0].style.animation=" transform_opacity  3s";
  document.getElementsByTagName('fieldset')[0].style.opacity="1";
}


function forward_contact(){
  window.location.href ="../views/french_page.php";
}
/* ****** */

document.querySelector('.back-contact').addEventListener("click",back_contact);
document.querySelector('.stop-contact').addEventListener("click",stop_contact);
document.querySelector('.play-contact').addEventListener("click",play_contact);
document.querySelector('.forward-contact').addEventListener("click",forward_contact);
