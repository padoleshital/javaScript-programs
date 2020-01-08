<?php
//we cannot access global variable inside the function directly
$var1=10;       //global variable
function fun()
{
    $var1=20;
    echo("var1 inside the function :$var1 <br>");
}
fun();
echo("var1 outside the function :$var1<br>");
echo"<br>";

 //accessing the global variable inside the function using global keyword 
$var2=30;
function gun()
{
   global $var2 ;
    $var2=40;
    echo("var2 inside the function :$var2<br>");    //40
}
gun();
echo("var2 outside the function :$var2 <br>");  //40 output will be same due to global keyword

echo'<br>';
//another way accessing global variable
$var3 =10;
function sun()
{
    $var3=$GLOBALS["var3"];     //global variable 
    $var3=20;
    echo("var3 inside the function:$var3<br>");
}
sun();
echo("var3 inside the function:$var3<br>");
?>