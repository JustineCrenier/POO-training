<?php

	class Voiture {

		private $_plaque;
		private $_date;
		private $_kilometre;
		private $_modele;
		private $_marque;
		private $_couleur;
		private $_poids;

		public function __construct($plaque, $date, $kilometre, $modele, $marque, $couleur, $poids){

			$this->_plaque = $plaque;
			$this->_date = $date;
			$this->_kilometre = $kilometre;
			$this->_modele = $modele;
			$this->_marque = $marque;
			$this->_couleur = $couleur;
			$this->_poids = $poids;

		}

		public function getMarque(){
			return $this->_marque;
		}

		public function getModele(){
			return $this->_modele;
		}

		public function getColor() {
			return $this->_couleur;
		}

		public function getKilometre(){
			return $this->_kilometre;
		}

		public function getDate(){
			return $this->_date;
		}

		public function isAvailable(){
			return strtolower($this->_marque) == 'audi' ? 'reservée' : 'libre';
		}

		public function category(){
			return $this->_poids > 3.5 ? 'commerciale' : 'utilitaire';
		}

		public function isUse(){
			if($this->_kilometre <= 100000){
				$use = 'low';
			}elseif($this->_kilometre > 100000 && $this->_kilometre < 200000){
				$use = 'middle';
			}else{
				$use = 'high';
			}

			return $use;
		}

		public function rouler(){
			$this->_kilometre += 100000;
		}

		public function getYear(){
			return strftime('%Y') - $this->_date;
		}

		public function getCountry(){
			if(substr(strtoupper($this->_plaque), 0, 2) == 'BE'){
				$country = 'Belgique';
			}else if(substr(strtoupper($this->_plaque), 0, 2) == 'FR'){
				$country = 'France';
			}else if(substr(strtoupper($this->_plaque), 0, 2) == 'DE'){
				$country = 'Allemagne';
			}else{
				$country = "Autre pays";
			}
			return $country;
		}

		public function display(){
			echo '<table>
					<tr>
						<td>
							Yolo
						</td>
					</tr>
				</table>';
		}
	}
