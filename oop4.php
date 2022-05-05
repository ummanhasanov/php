<?php
//class User {
//
//    public $name = "Adim";
//    public $password = "Parol";
//    public $email = "Email";
//    public $city = "Seher";
//    public $surname = "Familya";
//  
//    public function Hello() {
//        echo "Hello {$this->name}";
//    }
//}
//
//$admin = new User();
//$admin->name="Umman";
//echo $admin->Hello();




class User {

    public $name = "Adim";
    public $password = "Parol";
    public $email = "Email";
    public $city = "Seher";
    public $surname = "Familya";
    
    function getInfo() {
        return "{$this->name}" . "{$this->surname}";
    }
}

$admin = new User();
$admin->name="Umman";
$admin->surname=" Hasanov";
echo "Istifadeci:{$admin->getInfo()}";
