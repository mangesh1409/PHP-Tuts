<?php

    echo "<h2>Sessions In PHP</h2>";

    /* 1. Start session */
    session_start();

    /* 2.Create session */
    $_SESSION['username']="Harry";  //name=value;
    $_SESSION['favcat']='Books';
    echo "We have saved your session";

?>