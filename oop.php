<?php

class Fruit {

    // Properties
    public $name;
    public $color;

    // Methods
    // set_name, get_name, new, $this->  are key words
    function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }

    function set_color($color) {
        $this->color = $color;
    }

    function get_color() {
        return $this->color;
    }

}

$apple = new Fruit();
$apple->set_name('Apple');
$apple->set_color('red');
$banana = new Fruit();
$banana->set_name('Banana');
$banana->set_color('yellow');
echo "Name: " . $apple->get_name();
echo '<br>';
echo "Color: " . $apple->get_color();
echo '<br>';
echo "Name: " . $banana->get_name();
echo '<br>';
echo "Color: " . $banana->get_color();

echo '<br>';echo '<br>';echo '<br>';

Class Meyve {

    public $name;
    public $color;

    function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    function get_name() {
        return $this->name;
    }

    function get_color() {
        return $this->color;
    }

}

$apple1 = new Meyve("Apple", "red");
echo "Name: " . $apple1->get_name();
echo '<br>';
echo "Color: " . $apple1->get_color();
echo '<br>';

$banana1 = new Meyve("Banana", "yellow");
echo "Name: " . $banana1->get_name();
echo '<br>';
echo "Color: " . $banana1->get_color();
