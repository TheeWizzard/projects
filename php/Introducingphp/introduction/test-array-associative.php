<?php

$description = [
	
	'Earth' => 'mostly harmless',
	'Marvin' => 'the paranoid android'
		
];

$description['zaphod'] = 'President of the Imperial Galactic Goverment'; // adds another item to the end of the associative array

//echo $description['Marvin'];
// you CANNOT Put an associative array inside a string double quotes unless you use BRACES

echo "Earth is descripted as {$description['Earth']}";

//print_r($description);

