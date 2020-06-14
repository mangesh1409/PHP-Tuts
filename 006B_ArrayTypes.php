<?php

  echo "Associative Array in PHP <br>";
  echo "<br>";

  $color=array('Rohan'=>'Red',
                'Shubham'=>'Green',
                'Sumit'=>78);
  $color[3]="Orange";
  $color["Harry"]="Yellow";
  $color["Shubham"]="Black";

  echo print_r($color);
  echo "<br>";
  echo "<br>";

  echo var_dump($color);
  echo "<br>";
  echo "<br>";

  foreach ($color as $key => $value)
  {
    echo "Favorite color of $key is $value";
    echo '<br>';
  }  
  
  echo '<br>';
  echo '<br>';

  /////////////////////////////////////////////

  echo "Indexed Array in PHP";
  echo "<br>";

  $marks=array(56,45,78,90,"Harry",87);
  $marks[]=98;        // stored at last index
  $marks[2]=65;
  $marks[7]=101;
  //$marks[]

  for ($i=0; $i < count($marks) ; $i++) 
  { 
    echo $marks[$i]." ";
    
  }

  echo '<br>';
  echo '<br>';

  /////////////////////////////////////////////
  
  echo "Multidimentional Array in PHP";
  echo "<br>";

  $Multi=array(array(1,2,3,4,),
               array(5,6,7,8),
               array(9,0,3,5) );

  for ($i=0; $i < count($Multi); $i++) 
  { 
    for ($j=0; $j < count($Multi[$i]) ; $j++) 
    { 
      echo $Multi[$i][$j];
      echo "     ";
    }
    echo "<br>";
  }

  for ($j=0; $j < count($Multi) ; $j++) 
    { 
      echo var_dump($Multi[$j]);
      echo "<br>";
    }
?>