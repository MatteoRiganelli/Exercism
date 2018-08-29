<?php


class Robot {

    private $name = '';

    function __construct() {
        $this->name = $this->generateRandomName();
    }

    private function generateRandomName(){
        $name = chr(rand(65,90)). chr(rand(65,90)) . rand(100,999);
        return $name;
    }

    public function getName(){
        return $this->name;
    }

    public function reset(){
        $this->name = $this->generateRandomName();
    }



}






