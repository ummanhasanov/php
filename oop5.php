<?php

class User {

    public $name;
    public $password;
    public $email;
    public $city;
//    public $surname;

    function __construct($name, $password, $email, $city) {
        $this->name=$name;
        $this->password=$password;
        $this->email=$email;
        $this->city=$city;
    }
    function getInfo(){
        return "{$this->name}"."{$this->password}"."{$this->email}"."{$this->city}";
    }
}

$admin = new User(" Umman", " 123456", " umman152@mail.ru", " Baku");
//$admin->name="Umman";
//$admin->surname=" Hasanov";
//echo "Istifadeci:{$admin->getInfo()}";
//var_dump($admin); // use it without getInfo function
echo $admin->getInfo();
