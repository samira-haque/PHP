<?php
    echo "welcome to the stage where we are ready to get connected to a database<br>" ;
    // ways to connect to a MYsql Database
    // 1.MySQi extention
    // 2.PDO

    // CONNECTIONG TO THE DATABASE

    $servername = "localhost";
    $username = "root";
    $password = "" ;

    // create a connection

    $conn = mysqli_connect($servername, $username,$password);


    // die if connection was not successfull

    if(!$conn){
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }

    else{
        echo "connection was successful";
    }

    
?>