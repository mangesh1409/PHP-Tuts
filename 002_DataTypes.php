<?php
  
  EchO "Data Types in PHP <br>";

  //  String
  $name="Mangesh";
  $city='Pune';

  echo var_dump($name);
  echo "<br>";
  echo "My name is $name.I live in $city.<br>";
  echo "Data type of name is ",gettype($name);
  echo "<br>";
  echo "<br>";
  

  // Integer
  $EmployeeNo=11;
  $Salary=25000;

  echo var_dump($EmployeeNo);
  echo "<br>";
  echo "My ID is $EmployeeNo & salary is $Salary.<br>";
  echo "Data type of Salary is ",gettype($Salary);
  echo "<br>";
  echo "<br>";
  

  // Float
  $Income=1200.34;

  echo var_dump($Income);
  echo "<br>";
  echo "$Income <br>";
  echo "Data type of Income is ",gettype($Income);
  echo "<br>";
  echo "<br>";


  // Boolean
  $x=true;
  $y=false;

  echo "$x <br>";
  echo "$y <br>";     //return blank
  echo var_dump($x);  //return data type value
  echo var_dump($y);
  echo "<br>";
  echo "Data type of X is ",gettype($x);
  echo "<br>";
  echo "<br>";

  //Array
  $Marks=array(10,20,30,40,50);
  echo var_dump($Marks);
  echo "<br>";
  echo $Marks[0];
  echo "<br>";
  echo $Marks[1];
  echo "<br>";
  echo $Marks[2];
  echo "<br>";
  echo $Marks[3];
  echo "<br>";
  echo $Marks[4];
  echo "<br>";
  echo "Data type of Marks is ",gettype($Marks);
  echo "<br>";
  echo "<br>";
  //echo $Marks[5];
  //echo "<br>";

  //NULL
  $i=NULL;
  echo $i;
  echo "<br>";
  echo var_dump($i);
  echo "<br>";
  echo "Data type of i is ",gettype($i)
  ?>