<?php

	class Validator {

		public function sanitizeStr($name){
			return trim(filter_input(INPUT_POST, $name, FILTER_SANITIZE_STRING));
		}

		public function sanitizeInt($name){
			return trim(filter_input(INPUT_POST, $name, FILTER_SANITIZE_NUMBER_INT));
		}

		public function sanitizeFloat($name){
			return trim(filter_input(INPUT_POST, $name, FILTER_SANITIZE_NUMBER_FLOAT));	
		}

	}