<?php
class SingleDemo{
    static $instance = null;
    private function __construct(){
        // TODO - ADD PROPERTIES
    }

    public function getInstance()
    {
        if(self::$instance == null){
            self::$instance = new SingleDemo();
        }
        return self::$instance;
    }
    
}

$single = SingleDemo::getInstance();
$single3 = SingleDemo::getInstance();

var_dump($single3);