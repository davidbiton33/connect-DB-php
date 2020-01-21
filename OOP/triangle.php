<?php

require './shape.php';

 class Triange implements Shape{

     public function Triange($height){ // __construct
         $this->height = $height;
     }

     public function getHeight(){
         echo $this->height;
     }
     public function calcArea(){
        echo 'calc-area';
    }

 }

 $david = new Triange(200);

 echo '<h1> height: ' . $david->getHeight() . ' from class </h1>';





?>