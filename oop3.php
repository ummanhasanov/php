<?php

class User {

    public $name = "Adim";
    public $password = "Parol";
    public $email = "Email";
    public $city = "Seher";
    public $surname = "Familya";

//    public function Hello() {
//        echo "Hello {$this->name}";
//    }

    function getInfo(){
        return"{$this->name}" . " {$this->surname}";
    }
    
    
    
}

$admin = new User();
$admin->name = "Anton";
$admin->surname = "Cexov";

echo "Istifadeci: {$admin->getInfo()}";
