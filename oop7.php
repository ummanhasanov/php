<?php

class User {

//    public $name;
//    public $password;
//    public $email;
//    public $city;
    private static $name;
    public static function setName($name1) {
        self::$name = $name1;
    }
    public static function getName () {
    return self::$name;
    }
    
}
User::setName('Umman');
echo User::getName();