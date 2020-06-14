<?php

echo "<h2> Select and Display Data From Database </h2>";

// Connecting to database
$severname="localhost";
$username="root";
$password="";
$databse="first";   //name of databse which you want to use 

// Create Connection
$con=mysqli_connect($severname,$username,$password,$databse);

// Die if connection was not sucessfull
if(!$con){
    die("Sorry we failed to connect : ".mysqli_connect_error());
}
else{
    echo "Connection was sucessfull";
    echo "<br>";
}

// Query to select data from table

$sql = "select * from `trip` LIMIT 8";
$reult=mysqli_query($con,$sql);

// Find the number of records returned
$num=mysqli_num_rows($reult);
echo $num ." Records found in database";
echo "<br>";

// Display rows returned by sql query
if($num>0){
    /*$row=mysqli_fetch_assoc($reult); //fetch records one by one return associative array
    print_r($row);
    echo "<br>";
    $row=mysqli_fetch_assoc($reult); //fetch records one by one return associative array
    print_r($row);
    echo "<br>";
    $row=mysqli_fetch_assoc($reult); //fetch records one by one return associative array
    print_r($row);
    echo "<br>";
    $row=mysqli_fetch_assoc($reult); //fetch records one by one return associative array
    print_r($row);
    echo "<br>";
    $row=mysqli_fetch_assoc($reult); //fetch records one by one return associative array
    print_r($row);
    echo "<br>";*/

    while($row=mysqli_fetch_assoc($reult)){
        //echo var_dump($row);
        echo $row['sno']." ".$row['name']." ".$row['dest'];
        echo "<br>";
    }
}
?>