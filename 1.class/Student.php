<?php
	class Student{
		private $name = "";
		private $university = "null";

		public function Student($name) {
			$this -> name = $name;
		}

// *** this is constructor form ***
		// public function __construct() {
		// 	echo "This class name is" . " " . __CLASS__ . "<br/>";
		// }

		public function setName($name) {
			$this -> name = $name;
		}

		public function getName() { 
			return $this -> name . "<br/>";
		}

		public function setUniversity($university) {
			$this -> university = $university;
		}

		public function getUniversity() {
			return $this -> university . "<br/>";
		}
	}

	$jame = new Student("Songrit Maleerat");
	// $jame -> setName("Songrit Maleerat"); 
	$jame -> setUniversity("Suranaree University Of Technology");

	//var_dump($s);

	echo "My name is " . ($jame -> getName());
	 echo "My University name is " . ($jame -> getUniversity());
?>