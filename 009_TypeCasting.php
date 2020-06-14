<?php

    echo "<h1>Type Casting</h1>";

    $a=34.78;
    echo "Data Type of a=$a is ",gettype($a);
    echo "<br>";

    $b=(integer)($a);
    echo "Data Type of b=$b is ",gettype($b);
    echo "<br>";
    echo "<br>";

    $a1=78;
    echo "Data Type of a1=$a1 is ",gettype($a1);
    echo "<br>";

    $b1=(float)($a1);
    echo "Data Type of b1=$b1 is ",gettype($b1);
    echo "<br>";
    echo "<br>";
    
    $a2=78;
    echo "Data Type of a2=$a2 is ",gettype($a2);
    echo "<br>";

    $b2=(string)($a2);
    echo "Data Type of b2=$b2 is ",gettype($b2);
    echo "<br>";

    $var="hello";
    echo $var.$b2;
    echo "<br>";
    $var='98';
    echo $b+(integer)($var);
?>