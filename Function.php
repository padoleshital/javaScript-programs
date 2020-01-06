<?php
//1. Create simple Php function
function gun()
{
    echo" Hello gun";
    echo"<br>";
    echo"How are you";
}
gun(); // calling function.

echo "<br>";


//02. function with parameter
function substraction($a,$b)
{
    $sub=$a-$b;
    echo "Substration of two number is:$sub";
    echo("<br>");
}
substraction(10,5);

echo"<br>";

//3 passing argument by reference
function AddFive($num)
{
    $num +=5;
}
function AddSix(&$num)
{
    $num +=6;
}
$originum=10;
addFive($originum);

echo"Original value is $originum</br>";
addSix($originum);
echo"value with address is $originum";

echo "<br>";


//php function with return value
function addFunction($num1,$num2)
{
    $sum = $num1+$num2;     //perform addition operation
    return $sum;             //result will store in sum and pass to function declaration
}
$result=addFunction(20,50);  //function calling 
echo "Returned value from function =$result"; //print result
echo("<br>");

//setting default value for function parameter
function run($param = 10)
{
    print $param;
}
run(30);        //30    a
run();          //10    a
run("shital");     //shital a
 echo"<br>";

//dynamic function calls
function sun()
{
    echo "hello function";
}
$newfunction ="sun";
$newfunction();         //new function call which is equal to old function 

echo"<br>";

//anonymous function 

$run = create_function('$a , $b',
'return ($a + $b);');
$dun = create_function('$a , $b','return($a*$b);');
echo $run(30,30);
echo $dun(40,10);
echo("<br>");

?>