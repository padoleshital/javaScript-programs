<?php
// 1 create and interacting with object
echo"Hello class file";
echo"<br>";
/* print_r()- display information about vaiable in human readable form , _r means human readable form
*/
 $object =new User;     //new object as user
 print_r($object);      //print object only
 echo"<br>";

 $object->name ="joe";      //accessing object's property $object->property
 $object->password="myname";
 print_r($object);          //print object with property 
 echo"<br>";

 $object->save_user();      //method call

 class User     // class user
 {
     public $name,$password;  //declare variable
    
     function save_user()       //method
     {
         echo "save user code goes here";
     }
 }
 echo"<br>";
//declare a class and examin object
 $books =new Store;   //1.create new object store(call)
 $books = new Store('name','price');    //2.
 $books->name="math";   
 $books->price=1230;
 print_r($books);
$books->buy();      //method call 
 class Store        //class
 {
    public $name,$price;

    function buy()      //method
    {
        echo"User Object ";
    }

 }

 //3.clonning Objects
$object1=new Run();
$object1->name="shital";
$object2 =$object1;       //both object refer to same property to avoid this confusion we use clone oprator
$object2->name="shilpa";

class Run
{
    public $name;
}
echo "object1 name =" .$object1->name. "<br>";  //shilpa
echo "object2 name =" .$object2->name;          //shilpa
echo"<br>";
//3.1 use clone oparator in above program

$object1 = new Gun(); 
$object1->name="niti";
$object2= clone $object1;
$object2->name="ritu";
class Gun
{
    public $name;
}
echo"object1 name =".$object1->name."<br>";     //niti
echo"object2 name =".$object2->name;            //ritu








?>