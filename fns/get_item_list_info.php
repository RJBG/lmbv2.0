<?php  
	include_once '../dao/base_dao.php';

	try {
		$id = $_GET["id"];
		$access = new DAO();
		echo $access->get_item_list_info($id);
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
?>