<?php
//final keyword can be use to prevent class inhertance or prevent method overriding
final class Fruit
{
    function fun()
    {
        echo"inside fun method";
    }
}
/*class pitch extends Fruit    
{
    function  gun()
    {
        echo "inside gun";
    }
}*/
$Fruit= new Fruit;
$Fruit->fun();
/*$pitch =new pitch;//
$pitch->gun();
*/
?>