$(document).ready(function(){

	$(".item_search").keyup(function(){
		var key = $(this).val();
		$.post("../fns/get_item_list.php", {key:key}, function(data, status){
			$("#search-options").html(data);
			$("#search-options").on("click","li", function(){
				var item = $(this).find("input").val();
				var store = $("select[name='store']").val();
				$.post("../fns/get_item_data.php", {item:item, store:store}, function(data, status){
					var str = data.split("~");
					var id_check = true;
					var total_qty = 0;

					$(".item_id").each(function(){
						if (str[0] == $(this).text()) {
							id_check = false;
							return false;
						}
					});

					if (id_check) {
						$("input[name='no-of-items']").val($(".item_id").length + 1);
						$("#receive_table").find("tbody").append("<tr class='list-item'>"+
							"<td class='text-center item_id'>"+str[0]+"</td>"+
							"<td>"+str[1]+"</td>"+
							"<td class='text-center'><p class='ordered'>1</p></td>"+
							"<td class='text-center'>"+str[2]+"</td>"+
							"<td><div class='input-group input-group-sm text'><input type='number' class='change-qty input-box form-control' min='0' max='"+str[2]+"' value='1'></div></td>"+
							"<td class='text-center'><div class='input-group input-group-sm'><span class='input-group-addon'>₱</span><input type='number' class='price input-box form-control' value='"+str[3]+"' readonly></div></td>"+
							"<td><div class='input-group input-group-sm'><span class='input-group-addon'>₱</span><input type='number' value='"+str[3]+"' class='amount input-box form-control' readonly></div></td>"+
							"<td><!-- Single Button -->"+
                            "<div class='btn-group'>"+
                                "<button type='button' class='btn btn-default btn-xs dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>"+
                                    "Select Action <span class='caret'></span>"+
                                "</button>"+
                                    "<ul class='dropdown-menu'>"+
                                        "<li><a href='#'>"+
				                			"<span class='glyphicon glyphicon-pencil'></span> Edit</a>"+
				                		"</li>"+
                                        "<li><a href='#' class='remove'>"+
											"<span class='glyphicon glyphicon-minus'></span> Remove</a>"+
										"</li>"+
                                    "</ul>"+
                            "</div>"+
                            "<!-- End Single Button -->"+
							"</td></tr>");

						$(".item_search").val("").focus();
						
						$(".change-qty").each(function(){
							total_qty += +$(this).val();
						});
						$("input[name='total-qty']").val(total_qty);
						total_qty = 0;
						
						$(".change-qty").change(function(){
							var qty = $(this).val();
							var price = $(this).parents("tr").find(".price").val();
							var amnt = qty * price;
							$(this).parents("tr").find(".amount").val(amnt);
							$(this).parents("tr").find(".ordered").text(qty);
							get_total(".amount");

							$(".change-qty").each(function(){
								total_qty += +$(this).val();
							});
							$("input[name='total-qty']").val(total_qty);
							total_qty = 0;
						});
						get_total(".amount");

						$(".remove").click(function(){
							$(this).parents("tr").remove();
						});
					}else{
						alert("Item is already on the list.");
					}
				});
			})
		});
	});

	$("#customer-search").keyup(function(){
		var key = $(this).val();
		$.post("../fns/get_customer_list.php", {key:key}, function(data, status){
			$("#customer-options").html(data);
			$("#customer-options").on("click","li", function(){
				var data = $(this).find("input").val().split("~");
				$("#customer_id").val(data[0]);
				$("#customer_lname").val(data[1]);
				$("#customer_fname").val(data[2]);
				$("#company").val(data[3]);
				$("#customer-search").val(data[1]+", "+data[2]);

				// 	$(".change-qty").change(function(){
				// 		var qty = $(this).val();
				// 		var amnt = qty * str[3];
				// 		$(this).parents("tr").find(".amount").val(amnt);
				// 	});
				// });
			})
		});
	});

	$("#push-customer-to-sale").click(function(){
		var company = $("input[name='company']").val();
		var companyID = $("input[name='companyID']").val();
		var firstName = $("input[name='firstName']").val();
		var mi = $("input[name='mi']").val();
		var lastName = $("input[name='lastName']").val();
		var phone = $("input[name='phone']").val();
		var telephone = $("input[name='telephone']").val();

		if (company == "" || companyID == "" || firstName == "" || mi == "" || lastName == "" || phone == "" || telephone == "") {
			$("#msg").show("fade");
		} else{
			$.post("../fns/push_customer_to_sale.php", {company:company, companyID:companyID, firstName:firstName, mi:mi, lastName:lastName, phone:phone, telephone:telephone}, 
				function(data, status){
					if (status == "success") {
						var str = data.split("~");
						$("#customer_id").val(str[0]);
						$("#company").val(str[1]);
						$("#customer_fname").val(str[2]);
						$("#customer_lname").val(str[3]);
						$("#customer-search").val(str[3]+", "+str[2]);
					}else{
						alert(data);
					}
			});
		}
	});

	$("#push-po").click(function(){
		var status = $("select[name='status']").val();
		var subTotal = $("input[name='sub-total']").val();
		var total = $("input[name='total']").val();
		var dscPer = $("input[name='dscPer']").val();
		var discount = $("input[name='discount']").val();
		var taxPer = $("input[name='taxPer']").val();
		var tax = $("input[name='tax']").val();
		var fee = $("input[name='fee']").val();
		var frieght = $("input[name='frieght']").val();
		var storeID = $("select[name='store']").val();
		var vendorID = $("select[name='vendorID']").val();
		var comment = $("textarea[name='comments']").val();
		var noOfItems = 0;
		var totalQty = 0;
		var myint = 0;

		$(".list-item").each(function(){
			noOfItems++;
		});

		$(".ordered").each(function(){
			myint = parseInt($(this).text());
			totalQty = totalQty + myint;
		});

		if (vendorID == null || noOfItems == 0) {
			$("#msg").show("fade");
		} else{
			$.post("../fns/push_po.php", {status:status, subTotal:subTotal, total:total, dscPer:dscPer, discount:discount, taxPer:taxPer, 
				tax:tax, fee:fee, frieght:frieght, storeID:storeID, vendorID:vendorID, comment:comment, noOfItems:noOfItems, totalQty:totalQty}, function(data, status){
					// alert(data);
				});
			$(".list-item").each(function(){
				var itemID = $(this).find(".item_id").text();
				var voucherID = $("input[name='POnum']").val();
				var qty = $(this).find(".ordered").text();
				var price = $(this).find(".price").val();
				var eprice = $(this).find(".amount").val();
				$.post("../fns/push_po_items.php", {voucherID:voucherID, qty:qty, price:price, eprice:eprice, itemID:itemID}, function(data, status){
					// alert(data);
				});
			});
			window.location.assign("../pages/index.php?page=purchase_list");
		}
	});

	function get_total(selector){
		var sum = 0;
		$(selector).each(function(){
			sum += +$(this).val();
		});
		$("#total").val(sum);
		$("input[name='sub-total']").val(sum);
	}

});