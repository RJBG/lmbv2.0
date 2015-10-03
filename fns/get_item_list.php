<?php  
	include_once '../dao/base_dao.php';

	try {
		$key = $_POST["key"];
		$access = new DAO();
		echo $access->get_item_list($key);
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
?>