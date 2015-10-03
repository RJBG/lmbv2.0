<?php  
	include_once '../dao/base_dao.php';

	try {
		$access = new DAO();
		echo $access->get_vendor_list();
	} catch (PDOException $e) {
		$e->getMessage();
	}
?>