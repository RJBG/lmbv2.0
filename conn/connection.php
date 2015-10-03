<?php  
	/**
	* Connection Class
	*/
	class dataBase
	{
		public static $instance = NULL;
		function getInstance()
		{
			try {
				if (!self::$instance) {
					self::$instance = new PDO("mysql:host=127.0.0.1;dbname=lmb_2.0", "root", "admin", array(PDO::ATTR_PERSISTENT => true));
				}
				return self::$instance;
			} catch (PDOException $e) {
				return $e->getMessage();
			}
		}
	}
?>