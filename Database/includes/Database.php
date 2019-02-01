<?php
	
	class Database {

		private $host;
		private $dbname;
		private $username;
		private $password;

		public function __construct(
			$host,
			$dbname,
			$username,
			$password
		)
		{

			$this->host = $host;
			$this->dbname = $dbname;
			$this->username = $username;
			$this->password = $password;

		}

		public function connexion() {
			try
			{
				// On se connecte à MySQL
				$bdd = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname.';charset=utf8', $this->username, $this->password);
			}
			catch(Exception $e)
			{
				// En cas d'erreur, on annule la transaction et on affiche l'erreur
				echo 'Erreur : ' . $e->getMessage();
				$bdd->Rollback();
			}
		}
	}