let burger_menu=document.getElementsByTagName('i')[0]
let header_link=document.getElementsByTagName('ul')[0];

header_link.style.visibility="hidden";

    function rotate(){
      burger_menu.style.animation="rotate 3s";
    }

function show(){
  header_link.style.visibility="visible";
  document.getElementsByTagName('header')[0].style.backgroundColor= '#291737';
  document.getElementsByTagName('li')[0].style.animation="transform_opacity 1s";
  document.getElementsByTagName('li')[1].style.animation="transform_opacity 2s";
  document.getElementsByTagName('li')[2].style.animation="transform_opacity 3s";
}

function hide(){
  header_link.style.visibility="hidden";
}

burger_menu.addEventListener("click",show);
burger_menu.addEventListener("click",rotate);
console.log(document.getElementsByTagName('ul')[0]);
