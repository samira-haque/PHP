<?php

$name = "Samira";
$income = 200 ;

/* php data types

1.string
2.integer
3.float
4.boolean
5.object
6.Array
7.Null

*/

// string = sequence of character

$name = "samira";
$friend = 'Harry';
echo "$name is friend of $friend";
echo "<br>";

//Integer - non decimal number

$income = 455 ;
echo "<br>";
$debts = -655 ;
echo "<br>";
echo $income ;
echo "<br>";
echo $debts ;

// Float - Decimal point number 
 $income = 344.556;
 $debts = -45.864;

 echo $income;
 echo "<br>" ;
 echo $debts;
 echo "<br>";

 // Boolean can be either true of false

 $x = true;
 $is_friend = false ;

 echo $x;
 echo "<br>";
 echo var_dump($is_friend) ;
 echo "<br>";


 //object - Instances of classes

 // employee is a class ----> Samira can be object


 //Array - used store multiple values in a single variables

 $friends = array("a", "a", "b", "c", "d", "e");
 echo var_dump($friends) ;
echo $friends[0];
echo "<br>";
echo $friends[1];
echo "<br>";
echo $friends[2];
echo "<br>";
echo $friends[3];
echo "<br>";
echo $friends[4];
echo "<br>";

//Null

$name = NULL;
echo var_dump($name);



?>