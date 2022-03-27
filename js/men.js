var bars = document.getElementById("bars");
var exit = document.getElementById("exit");

window.addEventListener('scroll',()=>{
   console.log($('body').offset);
});

bars.addEventListener('click',()=>{
   $('.hidden-menu').css('right',0);
});
exit.addEventListener('click',()=>{
  $('.hidden-menu').css('right',-200);
});