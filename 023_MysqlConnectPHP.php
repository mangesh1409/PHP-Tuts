<?php

echo "<h2> MySQL and PHP Connectivity </h2>";

/* Ways to connect MySQL Database
1. MySQLi extension (only for MySQL) (Procedural and Object Orientation)
2. PDO (use for all database) */

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
?>