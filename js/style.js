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

	// For Data table plugin
	// var table = $('.table-fixed').DataTable();

 //    new $.fn.dataTable.FixedHeader( table );

 	$(".customer-table").DataTable({
 		ordering: false
 	});
 	$(".employee-table").DataTable({
 		ordering: false
 	});
 	$("#item-list-table").DataTable({
 		ordering: false
 	});
 	$(".customer-history-table").DataTable({
 		ordering: false
 	});
 	$(".UOM-table").DataTable({
 		ordering: false
 	});
 	$(".purchase-list").DataTable({
 		ordering: false
 	});
});