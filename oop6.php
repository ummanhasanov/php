<?php

class User {

    public $name;
    public $password;
    public $email;
    public $city;
    
    public function getName() {
        echo $this->name;
        $this->test();
    }
    public function test() {
        echo 'Test';
    }
    
}
$user1 = new User();
$user1->name="Umman";
$user1->getName();
echo '<br>';
$user2 = new User();
$user2->name="Huseyn";
$user2->getName();
