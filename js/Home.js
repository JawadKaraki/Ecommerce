var light = document.getElementById("light");
var light2 = document.getElementById("light2");
var bars = document.getElementById("bars");
var exit = document.getElementById("exit");
window.addEventListener('mousemove',function(){
	var e = window.event;

    var posX = e.clientX-5;
    var posY = e.clientY-5;

	light.style.top = posY;
	light.style.left = posX;
});
window.onload = function(){
	light2.style.left = "2000px";
};
window.addEventListener('mousemove',()=>{
	var e = window.event;
    var x = e.clientX/50;

   $('#line1').css('margin-left',80 - x);
   $('#line2').css('margin-left',80 + x);
   $('#line3').css('margin-left',80 - x);
   $('#line4').css('margin-left',80 + x);
});
bars.addEventListener('click',()=>{
   $('.hidden-menu').css('right',0);
});
exit.addEventListener('click',()=>{
  $('.hidden-menu').css('right',-200);
});




