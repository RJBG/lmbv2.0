<?php  
	include_once '../dao/base_dao.php';

	try {
		$deptCode = $_POST['deptCode'];
		$deptName = $_POST['deptName'];
		$taxCode = $_POST['taxCode'];
		$margin = $_POST['margin'];
		$markup = $_POST['markup'];

		$access = new DAO();
		echo $access->push_department($deptCode, $deptName, $taxCode, $margin, $markup);
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
?>