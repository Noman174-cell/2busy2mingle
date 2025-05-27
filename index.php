<?php
ob_start();
require_once("themes/config.php");
 
visitor_count();
include(TEMPLATE_FRONT . DS . "header-style.php");

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
 
include(TEMPLATE_FRONT . DS . "body.php"); 
include(TEMPLATE_FRONT . DS . "footer-style.php"); 
 
ob_end_flush();
?> 
<script>
jQuery(document).ready(function($){
	$(document).keydown(function(event){
		var pressedKey = String.fromCharCode(event.keyCode).toLowerCase();

		if (event.ctrlKey && (pressedKey == "c" || pressedKey == "u")) {
			alert('Sorry, This Functionality Has Been Disabled!');
			//disable key press porcessing
			return false;
		}
	});
});	
document.onkeypress = function (event) {
	event = (event || window.event);
	if (event.keyCode == 123) {
		return false;
	}
}
document.onmousedown = function (event) {
	event = (event || window.event);
	if (event.keyCode == 123) {
		return false;
	}
}
document.onkeydown = function (event) {
	event = (event || window.event);
	if (event.keyCode == 123) {
		return false;
	}
}
</script>

