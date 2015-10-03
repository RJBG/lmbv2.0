$(document).ready(function(){
	$("#store-option").change(function(){
		var query = $("#store-option").val();
		$.post("../fns/get_item_table.php", {query:query}, function(data, status){
			$("#item-table-list").html(data);
		});
	});

	$("#addVendorForm").click(function(){
		var vendorCode = $("input[name='vendorCode']").val();
		var companyName = $("input[name='companyName']").val();
		if (vendorCode == "" || companyName == "") {
			$("#msg").show("fade");
		} else{
			$.post("../fns/push_vendor.php", {vendorCode:vendorCode, companyName:companyName}, function(data, status){
				if (data == "success") {
					window.location.assign("../pages/index.php?page=vendor");
				}else{
					alert(data);
				}
			});
		}
	});

	$("#msg").hide();
	$("#push-customer").click(function(){
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
			$.post("../fns/push_customer.php", {company:company, companyID:companyID, firstName:firstName, mi:mi, lastName:lastName, phone:phone, telephone:telephone}, 
				function(data, status){
					if (data == "success") {
						window.location.assign("../pages/index.php?page=customer");
					}else{
						alert(data);
					}
			});
		}
	});

	$("#push-department").click(function(){
		var deptCode = $("input[name='deptCode']").val();
		var deptName = $("input[name='deptName']").val();
		var taxCode = $("input[name='taxCode']").val();
		var margin = $("input[name='margin']").val();
		var markup = $("input[name='markup']").val();

		if (deptCode == "" || deptName == "" || taxCode == "" || margin == "" || markup == "") {
			$("#msg").show("fade");
		} else{
			$.post("../fns/push_department.php", {deptCode:deptCode, deptName:deptName, taxCode:taxCode, margin:margin, markup:markup}, 
				function(data, status){
					if (data == "success") {
						window.location.assign("../pages/index.php?page=department");
					}else{
						alert(data);
					}
			});
		}
	});

	$("#push-store").click(function(){
		var storeCode = $("input[name='storeCode']").val();
		var storeName = $("input[name='storeName']").val();
		var storeAddress = $("input[name='storeAddress']").val();
		var misc1 = $("textarea[name='misc1']").val();
		var misc2 = $("textarea[name='misc2']").val();
		var misc3 = $("textarea[name='misc3']").val();

		if (storeCode == "" || storeName == "" || storeAddress == "") {
			$("#msg").show("fade");
		} else{
			$.post("../fns/push_store.php", {storeCode:storeCode, storeName:storeName, storeAddress:storeAddress, misc1:misc1, misc2:misc2, misc3:misc3}, 
				function(data, status){
					if (data == "success") {
						window.location.assign("../pages/index.php?page=store");
					}else{
						alert(data);
					}
			});
		}
	});

	$("#push-item").click(function(){
		var itemName = $("input[name='itemName']").val();
		var itemType = $("select[name='itemType']").val();
		var deptID = $("select[name='deptID']").val();
		var vendorID = $("select[name='vendorID']").val();
		var itemDes = $("input[name='itemDes']").val();
		var attribute = $("input[name='attribute']").val();
		var size = $("input[name='size']").val();
		var itemNo = $("input[name='itemNo']").val();
		var receiptNo = $("input[name='receiptNo']").val();
		var UPC = $("input[name='UPC']").val();
		var orderCost = $("input[name='orderCost']").val();
		var alternateLookup = $("input[name='alternateLookup']").val();
		var reorderPointByStore = $("input[name='reorderPointByStore']").val();
		var companyReorderPoint = $("input[name='companyReorderPoint']").val();
		var usualSellUnit = $("input[name='usualSellUnit']").val();
		var usualOrderUnit = $("input[name='usualOrderUnit']").val();
		var baseUnit = $("input[name='baseUnit']").val();
		var itemUnit2 = $("input[name='itemUnit2']").val();
		var itemUnit3 = $("input[name='itemUnit3']").val();
		var itemUnit4 = $("input[name='itemUnit4']").val();
		var onHandQuantity = $("input[name='onHandQuantity']").val();
		var storeReorderPoint = $("input[name='storeReorderPoint']").val();
		var regularPrice = $("input[name='regularPrice']").val();
		var orderCost = $("input[name='orderCost']").val();

		if (itemName == "") {
			$("#msg").show("fade");
		} else{
			$.post("../fns/push_item.php", {itemName:itemName, itemType:itemType, deptID:deptID, vendorID:vendorID, itemDes:itemDes, 
				attribute:attribute, size:size, itemNo:itemNo, receiptNo:receiptNo, UPC:UPC, orderCost:orderCost, alternateLookup:alternateLookup, 
				reorderPointByStore:reorderPointByStore, companyReorderPoint:companyReorderPoint, usualSellUnit:usualSellUnit, usualOrderUnit:usualOrderUnit, 
				baseUnit:baseUnit, itemUnit2:itemUnit2, itemUnit3:itemUnit2, itemUnit4:itemUnit4, onHandQuantity:onHandQuantity, storeReorderPoint:storeReorderPoint, 
				regularPrice:regularPrice, orderCost:orderCost}, 
				function(data, status){
					if (data == "success") {
						window.location.assign("../pages/index.php?page=items");
					}else{
						alert(data);
					}
			});
		}
	});

});