<?php
//
$company=array("avaya","cognizant","tata","josh");
$j=0;
 foreach($company as $item)
 {
     echo "$j: $item<br>";
     ++$j;
 }
// associative array list 
$companies=array(
    'bmw'=>"produnction",
    'cognizant'=>"software",
    'wipro'=>"electronics",
    'audi'=>"cars"
);
while(list($item,$description)=each($companies))
echo "$item : $description<br>";

//using list function 

list($a,$b,$c)=array('fun','gun','sun');
echo "a=$a b=$b c=$c";

?>