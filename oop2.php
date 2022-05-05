<?php

//class Shop {
//    
////    private $name;
//    public $name;
//    public function naming() {
//        $this->name = "Adidas";
//        echo $this->name;
//    }
//    
//}
//
//$product = new Shop;
//$product->naming();// private $name 


class User {

    public $name = "Adim";
    public $password = "Parol";
    public $email = "Email";
    public $city = "Seher";
    public $surname = "Familya";

}

$admin = new User();
$user1 = new User();
$user2 = new User();

$admin->name = "Alexey";
$user1->name = "Andrey";
$user2->name = "Vadim";

$admin->surname = " Durov";
$user1->surname = " Ivanov";
$user2->surname = " Surov";


echo $admin->name . $admin->surname;
echo '<br>';
echo $user1->name . $user1->surname;
echo '<br>';
echo $user2->name . $user2->surname;


           

