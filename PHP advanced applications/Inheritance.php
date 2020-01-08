<?php
$object = new Subuser;
$object->name="shital";
$object->email="shital10@gmail.com";
$object->password="shital10";
$object->contact="1234958";
$object->save_user();
$object->display();
class User
{
    public $name,$password;

    function save_user()
    {
        echo "Inside save_user method<br>";
        echo"name: ".$this->name."<br>";
    }

}

class Subuser extends User  //subuser inherited from user
{
    public $email,$conatct;

    function display()
    {
        echo"name:".$this->name."<br>";
        echo"passwrd:".$this->password."<br>";
        echo"email:".$this->email."<br>";
        echo"contact:".$this->contact;
    }
}
echo"<br>";

//inheritance constructor
class Fruit
{
    public $name;
    public $color;
    public function __construct($name,$color)   //parameterised constructor
    {
        $this->name=$name;
        $this->color=$color;
    }

   public function intro()
    {
        echo "inside intro";
        echo"the fruit is {$this->name} and the color is{$this->color}";
        echo"<br>";

    }
}
class Apple extends Fruit       //apple extended by fruit
{
    public function message()
    {
        echo"inside message method";
    }
}
class Bit extends Fruit
{
    public function word()
    {
        echo "inside word method";
        

    }
}

$Apple =new Apple("red","green");   //valid constructor is public
$Apple->intro();        //working 
$Apple->message();      //working
$Bit=new Bit("yello","orange");
$Bit-> word();


//Inhertiance using protected access specifier 



?>