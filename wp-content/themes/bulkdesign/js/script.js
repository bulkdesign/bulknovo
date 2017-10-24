$(document).ready(function(){
$('.parallax').parallax();
$('.scrollspy').scrollSpy();
$('.slider').slider();
$('.modal').modal();
$('.brand-logo').css("display", "none");
$('.toggle-overlay').click(function() {
$('aside').toggleClass('open');
});
window.addEventListener("scroll", function() {
if (window.scrollY > 200) {
$('.navegacao').css({"background-color": "#3d0a3c", "transition-property": "all", "transition-duration": "0.5s"});
$('.brand-logo').css({"display": "block", "transition-property": "all", "transition-duration": "0.5s"});
}
else {
$('.navegacao').css('background-color', 'transparent');
$('.brand-logo').css({"display": "none", "transition-property": "all", "transition-duration": "0.5s"});
}
},false);
});
$('.mobileoption').click(function() {
$('aside').toggleClass('open');
});
