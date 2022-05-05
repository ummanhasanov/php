<?php

class User {

    public $name;
    public $password;
    public $email;
    public $city;

    function __construct($name, $password, $email, $city) {
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
        $this->city = $city;
    }

    function getInfo() {
        $information = "{$this->name}" . "{$this->password}" . "{$this->email}" . "{$this->city}";
        return $information;
    }

}

$admin = new User(" Umman", " 123456", " umman152@mail.ru", " Baku");

//echo $admin->getInfo();
//echo '<br>';

class Moderator extends User {

    public $info;
    public $rights;

    function __construct($name, $password, $email, $city, $info, $rights) {
        parent::__construct($name, $password, $email, $city);

        $this->info = $info;
        $this->rights = $rights;
    }

    function getInfo() {
        $information = parent::getInfo();
        $information .= "{$this->info}" . "{$this->rights}";
        return $information;
    }

}

$moder = new Moderator(" Huseyn", " 234567", " huseyin.hasanov.2014@gmail.com", " Masalli", " Moderator", " True");
echo $moder->getInfo();

