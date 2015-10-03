<?php  
	include_once '../dao/base_dao.php';

	try {
		$access = new DAO();
		echo $access->get_item_count();
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
?>