$(function(){
	$("#aboutme").click(function() {
		$("#modal_aboutme").show();
	});
	$("#x_aboutme").click(function() {
		$("#modal_aboutme").hide();
	});
	$("#footer_terms_info").click(function() {
		$("#modal_terms").show();
	});
	$("#x_terms").click(function() {
		$("#modal_terms").hide();
	});
	$(window).click(function(event) {
		if (event.target == modal_aboutme) {
			$("#modal_aboutme").hide();
		} else if (event.target == modal_terms) {
			$("#modal_terms").hide();
		}
	});
})