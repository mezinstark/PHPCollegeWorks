<?php
    //single Quoted Strings
    $string01='This is single Quoted String';
    echo $string01;
    //Double Quoted Strings
    $string02="This is double Quoted String";
    echo $string02;

    //Here doc Strings
    $string03= <<<Demo
    This is a heredoc string
    <br>This is the second line.
    Demo;

    echo $string03;

    //NewDoc string
    $string04=<<<'Demo'
    This is a NewDoc String.
    <br> This is the seconline in Newdoc.
    Demo;
    echo $string04;
?>
