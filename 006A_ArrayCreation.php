<?php
    echo "<h2>Arrays</h2>";

    $a[]=11;
    echo $a[0]."<br>";

    $a1[0]=11;
    $a1[1]=21;
    $a1[2]=31;
    $a1[]=41;

    echo $a1[3]."<br>";
    ///////////////////////////////////////////

    $marks=array(21,45,67,89,95);
    for($i=0;$i<count($marks);$i++)
    {
        echo $marks[$i]."  ";
    }
    echo "<br>";
    //////////////////////////////////////////

    $num=range(3,10,1);
    for($i=0;$i<count($num);$i++)
    {
        echo $num[$i]."  ";
    }
    echo "<br>";
    $num=range(3,21,3);
    for($i=0;$i<count($num);$i++)
    {
        echo $num[$i]."  ";
    }
?>
