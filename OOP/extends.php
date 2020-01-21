<?php

class Person{
    public $notes = 'hi';
    public function __construct($name){
        $this->name = $name;
    }

    public function getName(){
        echo 'HELLO from Person CLASS';
    }
}


class Student extends Person{
    public function __construct($name){
        $this->name = $name;
    }
}


$david = new Student('david');

echo $david->notes;




?>