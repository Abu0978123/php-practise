<?php

$x = "John";
echo "Hello $x";   //in double quoted we can pass variables 
echo"<br>";
echo 'Hello $x';  // in single quoted we can not pass variables
echo"<br>". strlen($x);

echo"<br>";

echo strlen($x); // define string length 
echo"<br>";
echo str_word_count("Hello world!"); //define length of words
echo"<br>";
echo strpos("Hello world! abu", "abu"); // define position of the words and characters


{
    echo"<br>";
    $x = "Hello World!";
    echo strtoupper($x); // convert to upper case
    echo"<br>";

    $x = "Hello World!";
    echo strtolower($x); //convert to lower case
    echo"<br>";

    $x = "Hello World!";
    echo str_replace("World", "Dolly", $x); //replace data 
    echo"<br>";

    $x = "Hello World!";
    echo strrev($x); //reverse the given data
    echo"<br>";

    $x = " Hello World! ";
    echo trim($x); //remove the extra space
    echo"<br>";


}

?>