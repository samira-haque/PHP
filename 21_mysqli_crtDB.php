<?php

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
        echo "connection was successful<br>";
    }



    // create a db
    $sql = "CREATE DATABASE IF NOT EXISTS DBSamira2";
 
    $result = mysqli_query($conn, $sql);

    // check for the database creation success
    if($result){
        echo "The db was created successfully<br>";
    }

    else
    {
        echo "the db was not created successfully because of this error -->". mysqli_error($conn);
    }
    echo "The result is" ;
    echo  var_dump($result);
    echo "<br>" ;

    

    
?>