<?php  
	include_once '../dao/base_dao.php';
	try {
		$status = $_POST['status'];
		$subTotal = $_POST['subTotal'];
		$total = $_POST['total'];
		$dscPer = $_POST['dscPer'];
		$discount = $_POST['discount'];
		$taxPer = $_POST['taxPer'];
		$tax = $_POST['tax'];
		$fee = $_POST['fee'];
		$frieght = $_POST['frieght'];
		$storeID = $_POST['storeID'];
		$vendorID = $_POST['vendorID'];
		$comment = $_POST['comment'];
		$noOfItems = $_POST['noOfItems'];
		$totalQty = $_POST['totalQty'];

		$access = new DAO();
		echo $access->push_po($status, $subTotal, $total, $dscPer, $discount, $taxPer, $tax, $fee, $frieght, 
			$storeID, $vendorID, $comment, $noOfItems, $totalQty);
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
?>