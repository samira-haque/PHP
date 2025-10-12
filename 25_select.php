<?php

    $servername = "localhost";
    $username = "root";
    $password = "" ;
    $database = "dbsamira" ;

    // create a connection

    $conn = mysqli_connect($servername, $username, $password, $database);



    
    // die if connection was not successfull

    if(!$conn){
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }

    else{
        echo "connection was successful<br>";
    }

    $sql = "SELECT * FROM `phptrip`" ;
    $result = mysqli_query($conn, $sql) ;

    // find the number of records returned

    $num = mysqli_num_rows($result);
    echo $num ;
    echo "records dound in database " ;
    echo "<br>" ;

    // Display the rows returned by the sql query

    if($num > 0){
    //     $row = mysql_fetch_assoc($result) ;
    //     echo var_dump($row);
    //     echo "<br>" ;
    // }


    // we  can fetch in a better way using the while loop

    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($row);

        echo $row['sno']. " Hello ". $row['name']  ." Welcome to ". $row['dest'] ;
        echo "<br>" ;
    }

}
    ?>