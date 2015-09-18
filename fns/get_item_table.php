<?php  
	include_once '../dao/base_dao.php';

	try {
		$query = "";
		if (isset($_POST['query'])) {
			$query = $_POST['query'];
		}
		$access = new DAO();
		echo $access->get_item_table($query);
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
?>