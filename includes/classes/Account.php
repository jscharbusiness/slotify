<?php 
	class Account {

		private $errorArray;
	
		public function __construct() {
			$this->errorArray = array();
		}

		public function register($un, $fn, $ln, $em, $em2, $pw, $pw2) {
			$this->validateUsername($un);
			$this->validateFirstName($fn);
			$this->validateLastName($ln);
			$this->validateEmails($em, $em2);
			$this->validatePasswords($pw, $pw2);
		}

		private validateUsername($un) {

			if (strlen($un) > 25 || strlen($un) < 5) {
				array_push($this->errorArray, 'Your username must be between 5 and 25 characters');
				return;
			}
		}

		private validateFirstName($fn) {
			
		}

		private validateLastName($ln) {
			
		}

		private validateEmails($em, $em2) {
			
		}

		private validatePasswords($pw, $pw2) {
			
		}

	}
 ?>