<?php
$object = new Demo(); 
echo "Test a:" .Demo::$static_property."<br>";      //object of class to a=static property
echo "Test b:" .$object->run()."<br>";              //static property called by static method/nonstatic method throw slef keyword class object allowed
//echo "Test c" .$object->static_property; //accessing static to staic not allowed

class Demo
{
    static $static_property="I am Static property";

     function Run()
    {
        return self::$static_property;
        echo"Inside Static method";
    }
}
?>