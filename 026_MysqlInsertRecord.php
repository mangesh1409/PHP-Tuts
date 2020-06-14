<?php

echo "<h2> Insert Record in Table </h2>";

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

// Query to insert record into table
$name="Kiran";
$destination="Pune";

$sql = "INSERT INTO `trip` (`name`, `dest`) VALUES ('$name', '$destination')";
$reult=mysqli_query($con,$sql);

// Check for record insertion is done or fail
if($reult)
{
    echo "Record inserted sucessfully..";
    echo "<br>";
}
else{
    echo "Record is not inserted sucessfully."."<br>ERROR---->". mysqli_error($con);
    echo "<br>";
}
?>