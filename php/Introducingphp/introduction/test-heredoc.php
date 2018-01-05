<?php

// here we'll use Heredoc Syntax

$title = "The Hitchhiker's Guide to the Galazy";
$author = 'Douglas Adams';
$android = 'Marvin';
$brain_size = 'the size of a planet';

// EOT Means End of Text
$heredoc = <<< EOT

In "$title by $author, $android the "aranoid android"
colmplains that he's asked to do menial tasks, even though he's got "a brain $brain_size."

EOT;
	
echo $heredoc;
	


