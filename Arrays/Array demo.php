<html>
<body>
<?php
//basic array- adding items to an array

$paper[]="copier";
$paper[]="Inject";
$paper[]="Laser";
$paper[]="photo";
print_r($paper);

// adding items to an array using location

$name[0]="ram";
$name[1]="sita";
$name[2]="rima";
$name[3]="rami";
$name[4]="rani";
print_r($name[3]);// rani
print_r($name); //Array ( [0] => ram [1] => sita [2] => rima [3] => rami [4] => rani )

//print array element using echo

$company=array("BMW","AUDI","TATA","CISCO");
echo " company names are".$company[0].",".$company[1].",".$company[2].",".$company[3].".";
?>
</body>
</html>
