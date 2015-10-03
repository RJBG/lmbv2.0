<?php  
	include_once '../dao/base_dao.php';

	try {
		$company= $_POST['company'];
		$companyID= $_POST['companyID'];
		$firstName= $_POST['firstName'];
		$mi= $_POST['mi'];
		$lastName= $_POST['lastName'];
		$phone= $_POST['phone'];
		$telephone= $_POST['telephone'];

		$access = new DAO();
		echo $access->push_customer_to_sale($company, $companyID, $firstName, $mi, $lastName, $phone, $telephone);
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
?>