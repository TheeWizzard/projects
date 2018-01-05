<?php

$firstName = 'David';
$lastName = 'Powers';
$title = '"The Hitchhiker\'s Guide to the Galazy"';
$author = 'Douglas Adams';
$age = 42;
$newLine = "\r\n\r\n";



//$fullName = $firstName . ' ' . $lastName; //concatination
$fullName = "$firstName $lastName";
$book = "$title by author";
echo $fullName . '<br>'; // concatination operator
echo $book . '<br><br><br><br>';

$message = "Name: $fullName $newLine";
$message .= "Book: $book $newLine"; // combined concat operator
$message .= "Age: $age";

echo $message;



