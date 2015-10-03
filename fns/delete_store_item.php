<?php  
	include_once '../dao/base_dao.php';

	try {
		$id = $_POST["delete_id"];
		$access = new DAO();
		echo $access->delete_store_item($id);
		header("location: ../pages/index.php?page=items");
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
?>