/* Portofolio */

function back_portofolio(){
  //document.querySelector('#left').style.animation="transform_opacity 3s"
  window.location.href ="../views/french_page.php";
}

function forward_portofolio(){
  //document.querySelector('#right').style.animation="transform_opacity 3s";
  window.location.href ="contact_french.php";
}

function burst_grid(){
  document.querySelector('.portofolio-main').style.animation="burst_grid 2s";
  document.querySelector('.portofolio-main').style.gridGap="2em";
}

function rebuild_grid(){
  document.querySelector('.portofolio-main').style.animation="burst_grid reverse  2s";
  document.querySelector('.portofolio-main').style.gridGap="0em";
}

function responsive_portofolio(){
  let responsive_window=window.open("../views/portofolio-french.php","height=568px", "width=320px");
}

document.querySelector('.back-portofolio').addEventListener("click",back_portofolio);
document.querySelector('.forward-portofolio').addEventListener("click",forward_portofolio);
document.querySelector('.mobile-portofolio').addEventListener("click",responsive_portofolio);
document.querySelector('.play-portofolio').addEventListener("click",burst_grid);
document.querySelector('.stop-portofolio').addEventListener("click",rebuild_grid);
