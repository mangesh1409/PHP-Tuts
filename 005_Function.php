<?php

  echo "Functions in PHP";
  echo "<br>";

  function AddMarks($marks)
  {
    $sum=0;
    foreach ($marks as $value) 
    {
      $sum+=$value;
    }
    return $sum;
  }

  $Marks=[23,25,56,78,97];
  //$TotalMarks=AddMarks($Marks);
  echo "Total marks  ".AddMarks($Marks);
  

?>