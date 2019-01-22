<?php

	class Html {

		//balise meta charset
		public function charset($char){
			return '<meta charset="'.$char.'">';
		}
		//lien stylesheet
		public function style($link){
			return '<link rel="stylesheet" href="'.$link.'">';
		}
		//image
		public function image($src, $alt){
			return '<img src="'.$src.'" alt="'.$alt.'">';
		}
		//lien
		public function link($href,$value){
			return '<a href="'.$href.'">'.$value.'</a>';
		}
		//js
		public function jsfile($src){
			return '<script src="'.$src.'"></script>';
		}
	}