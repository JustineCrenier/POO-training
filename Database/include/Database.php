<?php

	class Database {

		private $servername;
		private $username;
		private $password;
		private $dbname;

		protected function connect(){
			$this->servername = "localhost:8889";
			$this->username = "root";
			$this->password = "root";
			$this->dbname = "trainingoop";

			$connexion = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
			return $connexion
		}

	}