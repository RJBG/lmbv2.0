<?php  
	include_once '../dao/base_dao.php';

	try {
		$access = new DAO();
		echo $access->get_department_list();
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
?>