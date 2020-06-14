<?php

  echo "Scope,Local & Global Variables in PHP"  ;
  echo "<br>";

  $a=24;$b=45;
  $name="Harry";


  function get()
  {
    $a=98;
    global $b;
    
    echo $a;
    echo "<br>";
    echo $b;
    $b=980;
    echo "<br>";
    echo "My name is ". $GLOBALS['name'];
    echo "<br>";
  }

  echo $a;
  echo "<br>";
  get();
  echo $b;
  echo "<br>";

  //echo var_dump($GLOBALS);
?>