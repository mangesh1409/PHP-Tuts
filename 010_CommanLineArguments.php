<?php

    /* Open terminal type command 
    C:\xampp\php>php.exe "c:\xampp\htdocs\Programs\010_CommanLineArguments.php" 4 6  
    */

    $a=$argv[1];
    $b=$argv[2];
    $c=$a+$b;
    echo $c,"\n";

    echo "1st Command line parameter is $argv[0]\n";    
    echo "2nd Command line parameter is $argv[1]\n";    
    echo "3rd Command line parameter is $argv[2]\n";

?>