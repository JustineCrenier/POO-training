<?php

	class Form {

		//ouvre le formulaire
		public function create($action){
			return '<form method="POST" action="'.$action.'">';
		}
		//créer un input
		public function text($name,$placeholder){
			return '<input type="text" name="'.$name.'" placeholder="'.$placeholder.'">';
		}
		//créer un select
		public function startSelect($name){
			return '<select name="'.$name.'">';
		}
		//option du select
		public function option($value){
			return '<option value="'.$value.'">'.$value.'</option>';
		}
		//fermer un select
		public function endSelect(){
			return '</select>';
		}
		//créer un textarea
		public function textarea($name, $rows, $cols, $value){
			return '<textarea name="'.$name.'" rows="'.$rows.'" cols="'.$cols.'">'.$value.'</textarea>';
		}
		//créer un paragraphe
		public function paragraphe($value){
			return '<p>'.$value.'</p>';
		}
		//créer un input radio
		public function radio($value, $name){
			return '<div>
  						<input type="radio" id="'.$value.'" name="'.$name.'" value="'.$value.'">
  						<label for="'.$value.'">'.$value.'</label>
					</div>';
		}
		//créer un checkbox
		public function checkbox($value){
			return '<div>
  						<input type="checkbox" id="'.$value.'" name="'.$value.'">
  						<label for="'.$value.'">'.$value.'</label>
					</div>';
		}
		//créer un bouton submit
		public function submit($value){
			return '<input type="submit" value="'.$value.'">';
		}
		//fermer le formulaire
		public function end(){
			return '</form>';
		}

	}