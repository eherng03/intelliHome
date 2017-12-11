<?php
	include_once "../dataBase/DBManager.php";


	//Clase que controla la tabla de luces de la base de datos
	class PresenceDBController{
		private static $instance;
		private function __construct(){}
		
		public static function getInstance(){
			if (!self::$instance instanceof self){
				self::$instance = new self;
			}
			return self::$instance;
		}

		/**
		* Cambia el estado de presencia habitacion place
		*/
		function changeStatus($state, $place){
			$dbManager = DBManager::getInstance();
			$connection = $dbManager->getConnection();

			$query = $connection->query("UPDATE presence SET state = '$state' WHERE location = '$place'");
			return $query;
		}

	}
?>