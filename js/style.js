$(document).ready(function(){
	// $(".nav li").click(function(){
	// 	$(".nav li").removeClass("active");
	// 	$(this).addClass("active");
	// });

	var h = $(".navbar").height();
	$("#index-wrap").css("margin-top", (h+10));

	$(".navbar-fixed-top").autoHidingNavbar();

	$("input").focus(function(){
		$("#msg").hide("fade");
	});
});