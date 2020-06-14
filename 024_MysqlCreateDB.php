<?php

echo "<h2> Creating Database </h2>";

// Connecting to database
$severname="localhost";
$username="root";
$password="";

// Create Connection
$con=mysqli_connect($severname,$username,$password);

// Die if connection was not sucessfull
if(!$con){
    die("Sorry we failed to connect : ".mysqli_connect_error());
}
else{
    echo "Connection was sucessfull";
    echo "<br>";
}

// Create Database
$sql="create database First1";
$reult=mysqli_query($con,$sql);

// Check for database creation is done or fail
if($reult)
{
    echo "Database created sucessfully..";
    echo "<br>";
}
else{
    echo "Database is not created sucessfully."."<br>ERROR---->". mysqli_error($con);
    echo "<br>";
}




?>