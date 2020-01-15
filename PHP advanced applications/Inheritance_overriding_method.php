<?php
class Fruit
{
    var $name;
    var $price;

    public function __construct($name, $price)
    {
        $this->name=$name;
        $this->price=$price;
    }

    public function intro()
    {
        echo"The fruit is{$this->name} and the price is {$this->price}";
    }
}

class Pitch extends Fruit       //pitch is subclass which is extended fron superclass fruit
{
    public $color;
    public function __construct($name, $price, $color)
    {
        $this->name=$name;
        $this->price=$price;
        $this->color=$color;
    }
    public function intro()
    {
        echo "The fruit is{$this->name},the price is{$this->price},the color is{$this->color}";
    }
}
$Pitch =new Pitch("pitch",40,"Red"); //(subclass)constructor is public .OK
$Pitch->intro();
$Fruit= new Fruit("pinapple",100);  //superclass.OK
$Fruit->intro();
echo"<br>";

//
class Dad       //super class
{
    function test()
    {
        echo "[class Dad] i am your father<br>";
        echo"<br>";
    }

}
class Son extends Dad       //subclass
{
    function test()         //override test method
    {
        echo "[class Son] I am son";
        echo"<br>";
    }
    function test2()
    {
        parent::Test();     //parent oprator for ovrriden method
    }
}
$object=new Son;
$object->test();
$object->test2();
?>