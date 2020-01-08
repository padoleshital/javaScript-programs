<?php
//after declre varible as static, increment varible by 1
function fun()
{
static $x=0;//declare variable static
echo $x;
$x++;

}
fun();//0
fun();//1
fun();//2
?>