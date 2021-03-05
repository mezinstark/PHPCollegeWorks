<?php 
    $array_str = $_POST["inputArr"];
    $array_orl = explode(",",$array_str);
    $array_or=$array_orl;
    $len= sizeof($array_or);
    for($i=0; $i<$len; $i++)
    {
        $low=$i;
        for($j=$i+1;$j<$len;$j++)
        {
            if($array_or[$j]<$array_or[$low])
            {
                $low=$j;
            }
        }
        if($array_or[$i]>$array_or[$low]){
            $temp=$array_or[$i];
            $array_or[$i]=$array_or[$low];
            $array_or[$low]=$temp;
        }
    }
    echo "Unsorted Array:";
    print_r($array_orl);
    echo "Sorted Array:";
    print_r($array_or);
?>