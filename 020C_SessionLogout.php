<?php

    echo "<h2>Destroy Session</h2>";

    /*  Start session */
    session_start();

    /* Delete values of all session variable  */
    session_unset();

    /* Destoying session */
    session_destroy();
    
    echo "<br>";
    echo "You have been loged out";

?>