<?php

  echo "String Tutorial";
  echo "<br>";

  $name="Harry is good boy";
  $name2="Hello world";
  echo $name." ".$name2;
  echo "<br>";
  
  echo "Length of". " string is ".strlen($name);
  echo "<br>";

  echo str_word_count($name);
  echo "<br>";

  echo strrev($name2);
  echo "<br>";

  echo strpos($name,"i");
  echo "<br>";
  echo strpos($name,"H");
  echo "<br>";
  echo strpos($name2,"z");    //print blank
  echo "<br>";

  echo str_replace("Harry","Rohan",$name);  
  echo "<br>";
  
  echo str_repeat($name2,8);
  echo "<br>";

  echo "       This is my country    ";
 // echo "<br>";
  
  echo "<pre>";
  echo rtrim("       This is my country    ");
  echo "<br>";
  echo ltrim("       This is my country    ");
  echo "<br>";
  echo "</pre>";  
?>