<?php

//auto load file .php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

class Dog extends Animal{

	public function Dog($name) {
		//toupper name
        parent::__construct(strtoupper($name));
	}

	public function action() {
		echo "Bit";
	}
}

$box = new Dog("Box");
echo "Dog name: " . ($box -> getName()) . "<br/>";
echo "Action " , $box -> getName() , " : " , $box -> action();

?>