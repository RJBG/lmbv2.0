<?php  
	include_once '../dao/base_dao.php';

	try {
		$itemName = $_POST["itemName"];
		$itemType = $_POST["itemType"];
		$deptID = $_POST["deptID"];
		$vendorID = $_POST["vendorID"];
		$itemDes = $_POST["itemDes"];
		$attribute = $_POST["attribute"];
		$size = $_POST["size"];
		$itemNo = $_POST["itemNo"];
		$receiptNo = $_POST["receiptNo"];
		$UPC = $_POST["UPC"];
		$orderCost = $_POST["orderCost"];
		$alternateLookup = $_POST["alternateLookup"];
		$reorderPointByStore = $_POST["reorderPointByStore"];
		$companyReorderPoint = $_POST["companyReorderPoint"];
		$usualSellUnit = $_POST["usualSellUnit"];
		$usualOrderUnit = $_POST["usualOrderUnit"];
		$baseUnit = $_POST["baseUnit"];
		$itemUnit2 = $_POST["itemUnit2"];
		$itemUnit3 = $_POST["itemUnit3"];
		$itemUnit4 = $_POST["itemUnit4"];
		$onHandQuantity = $_POST["onHandQuantity"];
		$storeReorderPoint = $_POST["storeReorderPoint"];
		$regularPrice = $_POST["regularPrice"];
		$orderCost = $_POST["orderCost"];

		$access = new DAO();
		echo $access->push_item($itemName, $itemType, $deptID, $vendorID, $itemDes, $attribute, $size, $itemNo, $receiptNo, 
			$UPC, $orderCost, $alternateLookup, $reorderPointByStore, $companyReorderPoint, $usualSellUnit, $usualOrderUnit, 
			$baseUnit, $itemUnit2, $itemUnit3, $itemUnit4, $onHandQuantity, $storeReorderPoint, $regularPrice, $orderCost);
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
?>