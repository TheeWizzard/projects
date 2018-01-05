<?php
$book = [
    'title' => "The Hitchhiker's Guide to the Galaxy",
    'author' => 'Douglas Adams',
    'description' => 'A comedy sci-fi adventure originally based on a BBC radio series'
];
$characters = [
    'Arthur Dent',
    'Ford Prefect',
    'Zaphod Beeblebrox',
    'Marvin, the paranoid android',
    'Slartibartfast'
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Challenge: Embed in HTML</title>
    <link href="../ch02/02_11/styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Book</h1>
	<p><strong>Title:</strong> <?php echo "{$book['title']} Written by: <?php {$book['author']} "; ?></p>
	<p><strong>Description:</strong> <?php echo "{$book['description']}"; ?></p>
<h2>Main Characters</h2>
<ul>
	<li><?php echo "$characters[0]"; ?></li>
	<li><?php echo "$characters[1]"; ?></li>
	<li><?php echo "$characters[2]"; ?></li>	
	<li><?php echo "$characters[3]"; ?></li>	
	<li><?php echo "$characters[4]"; ?></li>	
</ul>

</body>
</html>