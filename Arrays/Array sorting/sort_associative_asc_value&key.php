<?php
//amit is key,35 is value
$age=array("amit"=>"35","sagar"=>"95","tushar"=>65);

// sort associative arrays in ascending order, according to the value

asort($age);
print_r($age);  //Array ( [amit] => 35 [sagar] => 37 [tushar] => 65 )
echo"<br>";

//sort associative array in ascending order according to key
ksort($age);
print_r($age);      //Array ( [amit] => 35 [sagar] => 95 [tushar] => 65 )
echo"<br>";

arsort($age);
print_r($age);
echo"<br>";




?>