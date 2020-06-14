<?php

  echo "Operators in PHP";
  echo "<br>";

  $a=48;
  $b=13;
  $c=3;
  $d=4;

  //  Arithmetic Operators
  echo "Addition is ".($a+$b);
  echo "<br>";
  
  echo "Subtraction is ".($a-$b);
  echo "<br>";
  
  echo "Multiplication is ".($a*$b);
  echo "<br>";
  
  echo "Division is ".($a/$b);
  echo "<br>";

  echo "Remainder is ".($a%$b);
  echo "<br>";

  echo "c**d is ".($c**$d);
  echo "<br>";
    

  //Assignment Operators
  $x=$a;
  echo $x;
  echo "<br>";

  $a+=6;
  echo $a;
  echo "<br>";
  $a-=6;
  echo $a;
  echo "<br>";
  $a*=6;
  echo $a;
  echo "<br>";
  $a/=6;
  echo $a;
  echo "<br>";


  //Comparison Operator
  $x=9;
  $y=67;

  echo "For x == y result is ";
  echo var_dump($x==$y);
  echo "<br>";
  echo "For x > y result is ";
  echo var_dump($x>$y);
  echo "<br>";
  echo "For x < y result is ";
  echo var_dump($x<$y);
  echo "<br>";
  echo "For x != y result is ";
  echo var_dump($x!=$y);
  echo "<br>";    
?>