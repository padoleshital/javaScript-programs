<?php
$marks=array(
    "amit"=>array
    (
        "physics"=>53,
        "chemistry"=>76,
        "maths"=>87
    ),
    "rajan"=>array
    (
        "physics"=>30,
        "chemistry"=>78,
        "maths"=>58
    ),
    "rama"=>array
    (
        1,6,45,85,9,52,45
    )
    );
    //accssing multidimensional array
    echo "marks for amit in maths:";
    echo $marks['amit']['maths']."<br>";

    echo "marks for rajan in chemistry:";
    echo $marks['rajan']['chemistry'];

    echo "marks for rama in bio:";
    echo $marks['rama'][5];


?>