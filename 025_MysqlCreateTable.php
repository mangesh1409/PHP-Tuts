<?php

echo "<h2> Creating Table in Database </h2>";

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

// Query to create Table in database
$sql = "CREATE TABLE `TRIP` ( `sno` INT(6) NOT NULL AUTO_INCREMENT , `name` VARCHAR(12) NOT NULL , `dest` VARCHAR(6) NOT NULL , PRIMARY KEY (`sno`))";
$reult=mysqli_query($con,$sql);

// Check for table creation is done or fail
if($reult)
{
    echo "Table created sucessfully..";
    echo "<br>";
}
else{
    echo "Table is not created sucessfully."."<br>ERROR---->". mysqli_error($con);
    echo "<br>";
}

























?>