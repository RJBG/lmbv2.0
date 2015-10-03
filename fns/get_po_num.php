<?php  
	include_once '../dao/base_dao.php';
	try {
		$access = new DAO();
		echo $access->get_po_num() + 1;
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
?>