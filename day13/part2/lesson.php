<?php
    $name = "Zaw Zaw";
    echo "$name <br>";

    $nameOne = "Kyaw Kyaw";
    echo "$nameOne <br>";

    // Strlen
    $string = strlen ("Hello World");
    echo $string;
    echo "<br>";

    // Stram 
    $nameScamp = "Mg Mg";

    echo strcasecmp("Hello", "hello");
    echo "<br>";
    echo strcasecmp("Hello World", "hello");
    echo "<br>";
    echo strcasecmp("hello", "hello world");
    echo "<br>";

    // Strtolower
    $strlow = strtolower("HELLOW");
    echo "$strlow";
    echo "<br>";

    $strupper=strtoupper("hello");
    echo "$strupper";
    echo "<br>";

    // Substring
    $substPlus = substr("Welcome Myanmar", 4);
    echo "$substPlus";
    echo "<br>";

    $substMinu = substr("Welcome Myanmar", -9);
    echo "$substMinu";
    echo "<br>";

    // STR REPLACE
    $replace = str_replace("Word", "bootcam", "Hello Word");
    echo "$replace";



    





?>