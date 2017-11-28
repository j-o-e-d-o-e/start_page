var canvas;

$(function(){
	canvas = document.getElementById('embed-html');
	function handleMouseDown(evt) {
		evt.preventDefault();
		evt.stopPropagation();
		evt.target.style.cursor = 'default';
	}
	function handleMouseUp(evt) {
		evt.preventDefault();
		evt.stopPropagation();
		evt.target.style.cursor = '';
	}
	canvas.addEventListener('mousedown', handleMouseDown, false);
	canvas.addEventListener('mouseup', handleMouseUp, false);
	
	window.addEventListener("keydown", function(e) {
		// space and arrow keys
		if(event.target.tagName == "BODY" && [32, 37, 38, 39, 40].indexOf(e.keyCode) > -1) {
			e.preventDefault();
		}
	}, false);
});