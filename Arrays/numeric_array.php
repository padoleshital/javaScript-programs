<?php
// first method to craete array
$number=array(1,2,33,4,6);
foreach($number as $value)
{
    echo "value is $value";
    echo "<br>";
}

//second method of creating array
$number[0]="one";
$number[0]="two";
$number[0]="three";
$number[0]="four";
$number[0]="five";
$number[0]="six";
$number[0]="seven";
$number[0]="eight";
foreach($number as $item)
{
    echo "value is $item<br>";
}
print_r($number);
echo"<br>";
var_dump($number);
?>