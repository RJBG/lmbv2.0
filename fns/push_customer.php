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
		$alternativeContact = $_POST['alternativeContact'];
		$alternativePhone = $_POST['alternativePhone'];
		$city = $_POST['city'];
		$zipcode = $_POST['zipcode'];
		$street = $_POST['street'];
		$street2 = $_POST['street2'];
		$shipAddress = $_POST['shipAddress'];

		$access = new DAO();
		echo $access->push_customer($company, $companyID, $firstName, $mi, $lastName, $phone, $telephone, $alternativeContact, 
			$alternativePhone, $city, $zipcode, $street, $street2, $shipAddress);
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
?>