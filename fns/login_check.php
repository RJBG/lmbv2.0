<?php  
	include_once '../dao/base_dao.php';
	session_start();

	$user = $_POST['user'];
	$pass = $_POST['pass'];

	try {
		$access = new DAO();
		$response = $access->check_login($user, $pass);
		echo $response;
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
?>