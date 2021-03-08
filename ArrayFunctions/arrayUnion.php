<?php
    $fruit_name=array("Apple","Banana","Guava","WaterMelon","Orange");
     $color =array("Blue","Red","Orange","Green");
    $Union_items= array_unique(array_merge($color, $fruit_item));
    print_r($Union_items);
?>