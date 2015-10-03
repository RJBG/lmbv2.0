<?php  
	include_once '../dao/base_dao.php';

	try {
		$onHandQuantity = $_POST["onHandQuantity"];
		$storeReorderPoint = $_POST["storeReorderPoint"];
		$regularPrice = $_POST["regularPrice"];
		$orderCost = $_POST["orderCost"];
		$id = $_POST["id"];
		$edit = $_POST["edit-item-id"];

		$access = new DAO();
		echo $access->edit_store_item($onHandQuantity, $storeReorderPoint, $regularPrice, $orderCost, $id);
		header("location: ../pages/index.php?page=items&&id=".$edit);
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
?>