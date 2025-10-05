<?php 
$name = "Samira is a good girl";
echo $name;
echo "<br>";

echo "The length of " . "my string is " . strlen($name);
echo "<br>";
echo str_word_count($name);
echo "<br>";
echo strrev($name);
echo "<br>";
echo strpos($name, "is");
echo "<br>";

echo str_replace("Samira", "Arshiya", $name);
echo "<br>";
echo str_repeat($name,5);
echo "<br>";
echo rtrim("<pre> this is a good girl </pre>");

