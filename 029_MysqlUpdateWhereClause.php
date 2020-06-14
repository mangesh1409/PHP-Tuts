<?php

echo "<h2> Update Record In Database </h2>";

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

// Query to select data from table using WHERE clause
/*$sql = "SELECT * FROM `trip` WHERE `dest`='Pune'";
$reult=mysqli_query($con,$sql);

// Find the number of records returned
$num=mysqli_num_rows($reult);
echo $num ." Records found in database";
echo "<br>";
$no=1;

// Display rows returned by sql query
/*if($num>0){
    while($row=mysqli_fetch_assoc($reult)){
        //echo var_dump($row);
        echo $no." ".$row['name']." ".$row['dest'];
        echo "<br>";
        $no+=1;
    }
}*/

// Update data using WHERE clause
$sql="UPDATE `trip` SET `name` = 'Shubham' WHERE `trip`.`sno` = 5";
$reult=mysqli_query($con,$sql);
//echo var_dump($reult);
echo "<br>";

$aff=mysqli_affected_rows($con);
echo "Number of affected rows ".$aff;
echo "<br>";

if($reult){
    echo "Record Updated Sucessfully";
}
else{
    echo "Record is not updated";
}



?>