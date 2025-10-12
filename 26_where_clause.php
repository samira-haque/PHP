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

    $sql = "SELECT * FROM `phptrip` WHERE `dest` = 'Dhaka'" ;
    $result = mysqli_query($conn, $sql) ;

    // find the number of records returned

    $num = mysqli_num_rows($result);
    echo $num ;
    echo " records found in database " ;
    echo "<br>" ;
    $no = 1;


    // uses of where clause to fetch data from database
    if($num > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo $no . " Hello ". $row['name']  ." Welcome to ". $row['dest'] ;
        echo "<br>" ;
        $no = $no + 1 ;
    }
}


// usage of where clause to update data

$sql = "UPDATE `phptrip` SET `name` = 'FromDhaka' Where `dest` = 'Dhaka'";
$result = mysqli_query($conn,$sql);
echo var_dump($result) ;
$aff = mysqli_affected_rows($conn) ;
echo "<br>Number of affected rows : $aff<br>" ;


if($result){
    echo "We updated the record succesfully" ;
}

else{
    echo "we could not update the record successfully" ;
}
?>