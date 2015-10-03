<?php  
	include_once '../dao/base_dao.php';

	try {
		$item = $_POST["item"];
		$store = $_POST["store"];
		$access = new DAO();
		echo $access->get_item_data($item, $store);
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
?>