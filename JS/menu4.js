//Click the hamburger menu to see the animation
//You can click the X to close or click anywhere outside the menu

function toggleMenu() {
	$('#menu').slideToggle(300);
	$('.bg-cover').toggleClass('reveal');
	$('.hamburger-shell').toggleClass('menu-open');
	var expanded = $('.hamburger-shell').attr('aria-expanded') == true;
	$('.hamburger-shell').attr('aria-expanded', !expanded);
}


$(document).ready(function(){
	$('.hamburger-shell').click(toggleMenu)
	$('.bg-cover').click(toggleMenu)
});

