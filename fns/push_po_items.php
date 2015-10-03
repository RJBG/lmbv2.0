<?php  
	include_once '../dao/base_dao.php';
	try {
		$voucherID = $_POST['voucherID'];
		$qty = $_POST['qty'];
		$price = $_POST['price'];
		$eprice = $_POST['eprice'];
		$itemID = $_POST['itemID'];

		$access = new DAO();
		echo $access->push_po_items($voucherID, $qty, $price, $eprice, $itemID);
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
?>