$(document).ready(function(){
	headerNav.init();
});


var headerNav = {};
// jquery UI is broken the tansition doens't work we need to replace this one day "slow" won't work.

headerNav.init = function(){
	$('header.main-header nav a').hover(headerNav.toggleClass,headerNav.toggleClass	);
};

headerNav.toggleClass = function(){
	$(this).toggleClass( "hover", 'slow');
};