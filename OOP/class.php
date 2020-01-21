<?php


class User{
    private $username;
    private $note;

    public function __construct($name,$note,$age){
        $this->username = $name;
        $this->note = $note;
        $this->age = $age;
    }

    public function getAge(){
        return $this->age;
    }

    private function getNote(){
        return $this->note;
    }
}

$david = new User('david', 'note1', 20);
echo '<h1> AGE: ' . $david->getAge() . ' from class </h1>';



?>