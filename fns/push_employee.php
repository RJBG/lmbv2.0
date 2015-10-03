<?php  
	include_once '../dao/base_dao.php';

	try {
		$store = $_POST["employee"];
		$firstName = $_POST["firstName"];
		$mi = $_POST["mi"];
		$lastName = $_POST["lastName"];
		$employeeID = $_POST["employeeID"];
		$phone = $_POST["phone"];
		$telephone = $_POST["telephone"];
		$address = $_POST["address"];
		$username = $_POST["username"];
		$password = $_POST["password"];

		$access = new DAO();
		echo $access->push_employee($store, $firstName, $mi, $lastName, $employeeID, $phone, $telephone, $address, $username, $password);
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
?>