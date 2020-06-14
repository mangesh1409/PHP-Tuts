<?php

echo "<h2> Delet Record In Database </h2>";

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

// Query to Delete record from database
$sql = "DELETE FROM `trip` WHERE `trip`.`dest` = 'Pune' LIMIT 6";
$reult=mysqli_query($con,$sql);
echo var_dump($reult);
echo "<br>";

$aff=mysqli_affected_rows($con);
echo "Number of affected rows ".$aff;
echo "<br>";

if($reult){
    echo "Record Deleted Sucessfully";
    echo "<br>";
}
else{
    $err=mysqli_error(($con));
    echo "Record not deleted due to this error---> $err";
}

?>