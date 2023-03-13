<?php 
	// koneksi db
	class Database {
		private $host = DB_HOST;
		private $user = DB_USER;
		private $pass = DB_PASS;
		private $db 	= DB_NAME;

		private $db_handler;
		private $statment;

		function __construct() {
			// server koneksi
			$db_servername = 'mysql:host='. $this->host .';dbname='. $this->db;

			// optimasi
			$option = [
				PDO::ATTR_PERSISTENT => true,
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
			];

			try {
				$this->db_handler = new PDO($db_servername, $this->user, $this->pass, $option);
			} 
			catch (PDOException $e) {
				die($e->getMessage());
			}
		}

		// fungsi query
		function query($query) {
			$this->statment = $this->db_handler->prepare($query);
		}

		function bind($param, $value, $type = NULL) {
			if (is_null($type)) {
				switch (true) {
					case is_int($value) : 
						$type = PDO::PARAM_INT;
						break;
					case is_bool($value) :
						$type = PDO::PARAM_BOOL;
						break;
					case is_null($value) :
						$type = PDO::PARAM_NULL;
						break;
					default :
						$type = PDO::PARAM_STR;
				}
			}

			$this->statment->bindValue($param, $value, $type);
		}

		// fungsi eksekusi query
		function execute() {
			$this->statment->execute();
		}

		// fungsi ambil seluruh data
		function resultSet() {
			$this->execute();
			return $this->statment->fetchAll(PDO::FETCH_ASSOC);
		}

		// fungsi ambil salah satu data
		function single() {
			$this->execute();
			return $this->statment->fetch(PDO::FETCH_ASSOC);
		}

		function rowcount() {
			return $this->statment->rowcount();
		}
	}






?>