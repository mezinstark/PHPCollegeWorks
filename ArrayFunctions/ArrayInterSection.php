<?php
    $fruit_name=array("Apple","Banana","Guava","WaterMelon","Orange");
     $color =array("Blue","Red","Orange","Green");
    $intersected_item= array_intersect_key($color, $fruit_item);
    print_r($intersected_item);
?>