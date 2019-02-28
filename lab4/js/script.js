
$(document).ready(function() {

$( "nav" ).click(function() {
  event.stopPropagation();
});

$( "#hamburger" ).click(function() {
  $( ".menu" ).toggleClass( "visible" );
});

$("body").click(function() {
	  $( ".menu" ).removeClass( "visible" );
});

});




  

