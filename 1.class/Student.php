<!-- Example from : http://code.tutsplus.com -->

<?php
	class Student{
		private $name = "null";
		private $university = "null";
		private $major = "null";
		public function Student($name) {
			$this -> name = $name;
		}

// *** this is constructor php form ***
		// public function __construct() {
		// 	echo "This class name is" . " " . __CLASS__ . "<br/>";
		// }

// **** this is destructor php form ***
// *** active when end file php ***
		// public function __destruct() {
		// 	echo "<br/>" . 'The class "', __CLASS__, '" was destroyed' . "<br/>";
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

		public function setMajor($major) {
			$this -> major = $major;
		}

		public function getMajor() {
			return $this -> major . "<br/>";
		}
	}

	$jame = new Student("Songrit Maleerat");
	$jame -> setUniversity("Suranaree University Of Technology");
	$jame -> setMajor("Conputer Engineering");
	//var_dump($s);

	echo "Student name: " . ($jame -> getName());
	echo "University: " . ($jame -> getUniversity());
	echo "Major: " . ($jame -> getMajor());

	echo "<br/>";

	$jib = new Student("Patinya Maleerat");
	$jib -> setUniversity("Khonkaen University");
	$jib -> setMajor("Faculty of Pharmaceutical");


	echo "Student name: " . ($jib -> getName());
	echo "University: " . ($jib -> getUniversity());
	echo "Major: " . ($jib -> getMajor());
	
// *** Destroy the object ***
	unset($jame);
	unset($jib);


?>