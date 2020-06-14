<?php

    $name=$_POST['name'];
    echo "Your name is ".$name."<br>";
    $address=$_POST['address'];
    echo "Your address is ".$address."<br>";

    $gender=$_POST['gen'];
    echo "You are ".$gender."<br>";

    $choice=$_POST['game'];
    //print_r($choice)."<br>";
    echo "Your have selected following choices as : <br>";
    foreach($choice as $var)
    {
        echo $var."<br>";
    }

    $hobby=$_POST['hobbies'];
    echo "Your hobbies are: <br>";
    foreach($hobby as $var)
    {
        echo $var."<br>";
    }

?>