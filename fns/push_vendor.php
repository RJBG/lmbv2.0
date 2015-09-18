<?php  
	include_once '../dao/base_dao.php';
	
	try {
		$vendorCode = $_POST['vendorCode'];
		$companyName = $_POST['companyName'];

		$access = new DAO();
		echo $access->push_vendor($vendorCode, $companyName);
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
?>