<?php

class Animal {
	private $name = "";

	public function Animal($name) {
		$this -> name = $name;
	}

	public function setName($name) {
		$this -> name = $name;
	}

	public function getName() {
		return $this -> name;
	}

	public function action() {
		echo "No Action";
	}
}

?>