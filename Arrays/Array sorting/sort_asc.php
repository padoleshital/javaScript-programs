<?php
    $company= array("BMW","Avaya","Audi","Tata","Cisco");
   
   //sorting array in ascending order
    sort($company);
    print_r($company);
    echo"<br>";

    //sorting array in decending order.
    rsort($company);
    print_r($company);
    echo"<br>";

    $numeric= array(10,55,45,35,100,5,3,8,60);
    //sort number in ascending order
    sort($numeric);
    print_r($numeric);      //Array ( [0] => 3 [1] => 5 [2] => 8 [3] => 10 [4] => 35 [5] => 45 [6] => 55 [7] => 60 [8] => 100 )
    echo"<br>";

    //sort number in descending order
    rsort($numeric);
    print_r($numeric);       //Array ( [0] => 100 [1] => 60 [2] => 55 [3] => 45 [4] => 35 [5] => 10 [6] => 8 [7] => 5 [8] => 3 )
    echo"<br>";

    
?>