<?php  
	include_once '../dao/base_dao.php';
	try {
		$access = new DAO();
		echo $access->get_customer_history();
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
?>