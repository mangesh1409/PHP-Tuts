<?php

    /*if(isset($_POST['sbm'])){
        echo "Data submitted <br>";
    }
    else{
        echo "Data is not sunmitted<br>";
    }

    if(isset($_POST['btnsubmit1'])){
        echo "First Button is pressed<br>";
    }
    elseif(isset($_POST['btnsubmit2'])){
        echo "Second Button is pressed<br>";
    }
    elseif(isset($_POST['btnsubmit3'])){
        echo "Third Button is pressed<br>";
    }*/
////////////////////////////////////////////////////////////

    /* Requried Field Validation    */

    if(isset($_POST['sbm'])){
        if(!empty($_POST['id'])){
            echo "<h2>Your id is ".$_POST['id']."</h2>";
        }
        else{
                echo "ID is requried";
                //header('location:validation.html');
                
        }
    }

?>