<?php
    echo "<h2>Access session value</h2>";
    
    /* Start session */
    session_start();

    /*  Get Data    */
    if(isset($_SESSION['username'])){
    echo "Welcome ". $_SESSION['username'];
    echo "<br>";
    echo "Your favorite category is ". $_SESSION['favcat'];
    echo "<br>";
    }else{
        echo "Please login to continue";
    }

?>
