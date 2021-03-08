<?php
    $continents=array("North Amarica"=>"NA", "South Amarica"=>"SA","Asia"=>"AS","Antartica"=>"AN","Africa"=>"AF");
    // $change_case=
    $group=array_chunk($continents,3);
    print_r($group);
?>