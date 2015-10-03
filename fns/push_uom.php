<?php  
	include_once '../dao/base_dao.php';
	try {
		$unitName = $_POST['unitName'];
		$baseUnit = $_POST['baseUnit'];
		$baseUnitName = $_POST['baseUnitName'];
		$noOfBaseUnit = $_POST['noOfBaseUnit'];

		$access = new DAO();
		echo $access->push_unit_of_measure($unitName, $baseUnit, $baseUnitName, $noOfBaseUnit);
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
?>