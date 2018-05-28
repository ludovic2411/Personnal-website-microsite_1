let burger_menu=document.getElementsByTagName('i')[0]
let header_link=document.getElementsByTagName('ul')[0];

header_link.style.visibility="hidden";



    function rotate(){
      burger_menu.style.animation="rotate 3s";
    }

function show(){
  header_link.style.visibility="visible";
  //document.getElementsByTagName('header')[0].style.backgroundColor= '$text_color';
  document.getElementsByTagName('li')[0].style.animation="transform_opacity 1s";
  document.getElementsByTagName('li')[1].style.animation="transform_opacity 2s";
  document.getElementsByTagName('li')[2].style.animation="transform_opacity 3s";
  document.getElementsByTagName('li')[3].style.animation="transform_opacity 4s";
}

burger_menu.addEventListener("click",show);
burger_menu.addEventListener("click",rotate);

document.querySelector('#left').style.opacity="0";
document.querySelector('#center').style.opacity="0";
document.querySelector('#right').style.opacity="0";
/* Partie à propos */
function back(){
  //document.querySelector('#left').style.animation="transform_opacity 3s"
  window.location.href ="../index.php";
}

function stop(){
  document.querySelector('#left').style.opacity="0";
  document.querySelector('#center').style.opacity="0";
  document.querySelector('#right').style.opacity="0";
}

function play(){
  document.querySelector('#left').style.animation="transform_opacity 3s";
  document.querySelector('#center').style.animation="transform_opacity 4s";
  document.querySelector('#right').style.animation="transform_opacity 5s";

  document.querySelector('#left').style.opacity="1";
  document.querySelector('#center').style.opacity="1";
  document.querySelector('#right').style.opacity="1";
}

function forward(){
  //document.querySelector('#right').style.animation="transform_opacity 3s";
  window.location.href ="portofolio-french.php";
}
/* ****** */



document.querySelector('.back').addEventListener("click",back);
document.querySelector('.stop').addEventListener("click",stop);
document.querySelector('.play').addEventListener("click",play);
document.querySelector('.forward').addEventListener("click",forward);
