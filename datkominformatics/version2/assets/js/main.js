// #######################STICKY

// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("header-navbar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
};

// 

$(function () {

    //if mobile burger menu clicked
    $('#toggle').click(function () {
    $(this).toggleClass('active');
    $('#overlay').toggleClass('open');
    });


});

// 

feather.replace();

//Preloader
$(window).on("load", function(){ 
  // Preloader 
  $('#loader').fadeOut('slow');
  $('.ios-loader').fadeOut('slow'); 
});  

// 

$(document).ready(function()
{
  var text = ["Découvrez nos réalisations.","Rêvez les yeux ouverts.", "Visionnaire, tout comme vous.", "Un penchant pour la perfection.", "Tout ce que nous aimons faire. Version extra-ordinaire."];
  var x = Math.floor((Math.random()*5));
  $('#DreamStudio-title').html(text[x]);

});

