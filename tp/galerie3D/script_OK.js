/*
window.onload = function(){
	var galeries = document.getElementsByClassName('galerie3D');
	for (var i = 0; i < galeries.length; i++) {
		galeries[i].classList.add('init');
	};
}
*/
function triggerTransitions () {
	document.body.classList.add('transition');
	setTimeout(function () {
		document.body.classList.remove('transition');
	}, 50);
}
window.addEventListener('load', triggerTransitions);