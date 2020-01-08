<?php
class Demo1
{
    public $name="shital";  //valid
    var $name1='shilpa';  //valid 
    public $num ="120";     //valid 
    public $num1=120;       //valid
   // public $time();         //Not valid call a function
    //public $score=$level*2; //Invalid use an expression

}
//we can create global constant with define function we can define constant inside class
    demo2::lookup();
    class Demo2
    {
        const ENGLISH=0;        //const can not change after define
        const FRENCH=1;
        const GERMAN=2;

        static function lookup()
        {
            echo self::ENGLISH; //self operator call direct class without creating instance
        }

    }
    

?>