<?php

	class Database {

		private $_servername;
		private $_username;
		private $_password;
		private $_dbname;

		protected function connect(){
			$this->_servername = "localhost:8889";
			$this->_username = "root";
			$this->_password = "root";
			$this->_dbname = "trainingoop";

			$connexion = new mysqli($this->_servername, $this->_username, $this->_password, $this->_dbname);
			return $connexion
		}

	}