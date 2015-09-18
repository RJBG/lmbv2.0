<?php  
	include_once '../dao/base_dao.php';

	try {
		$storeCode = $_POST['storeCode'];
		$storeName = $_POST['storeName'];
		$storeAddress = $_POST['storeAddress'];
		$misc1 = $_POST['misc1'];
		$misc2 = $_POST['misc2'];
		$misc3 = $_POST['misc3'];
		$access = new DAO();
		echo $access->push_store($storeCode, $storeName, $storeAddress, $misc1, $misc2, $misc3);
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
?>