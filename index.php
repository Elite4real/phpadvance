<?php

class Fruit{
    //property
    public $name;
    public $color;


    //method
    public function set_name($name){
        $this->name = $name;
    }


    //get method
    public function get_name(){
        return $this->name;
    }

    
public function set_color($color){
    $this->color = $color;
}

public function get_color(){
return $this->color;}
}

// define the object
$apple= new Fruit();
$apple-> set_name("Apple");
$apple->set_color("Green colour");

//banana
$banana = new Fruit();
$banana->set_name("Banana");
$banana->set_color("yellow Color ");
// Display the fruit name
//echo $banana->get_name();
echo $banana->name;

echo "<br />";
//echo $apple->get_name();
echo $apple->name;
echo "<br />";


//echo $banana->get_color();
echo $banana->color;
echo "<br />";

//echo $apple->get_color();
echo $apple->color;

?>