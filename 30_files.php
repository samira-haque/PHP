<?php

$fptr = fopen("myfile.txt", "r");
// echo var_dump($fptr) ;

if(!$fptr){
    die("Unable tp open this file.Please enter a calid filename");

}

$content = fread($fptr,filesize("myfile.txt"));
echo $content;
fclose($fptr)

?>