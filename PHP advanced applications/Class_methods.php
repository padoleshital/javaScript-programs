<?php
 class Books
 {
    public  $price;   //access specifier
    public $name;          //variable declaration
    var $author;
    
    function get_price()
    {
        return $this->price;
        //return $this->name;
        //return $this->author;

    }
    function get_name()
    {
        return $this->name;
    }
    function get_author()
    {
            return $this->author;
    }
 }

 $object=new Books;
 $object->price=1200;
$object->name="ram";
$object->author="deshpande";
echo $object->get_price();
echo"<br>";
echo $object->get_name();
echo"<br>";
echo $object->get_author(); 
echo"<br>";
?>