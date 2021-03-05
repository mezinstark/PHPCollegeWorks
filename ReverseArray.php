<?php
    $array_str=$_POST["inputArr"];
    $array_or= explode(",",$array_str);
    $rev_index=0;
    for($init = sizeof($array_or)-1; $init>=0; $init--)
    {
        $reverseArr[$rev_index]= $array_or[$init];
        $rev_index++;
    }
    echo "Original Array";
    print_r($array_or);
    echo "Reversed Array:";
    print_r($reverseArr);
?>