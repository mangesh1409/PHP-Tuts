<?php

    echo "<h2>Open and Read File </h2>";

    /*$a=readfile("Myfile.txt");
    echo $a;        // Give no of characters
    echo "<br>";*/

    //readfile("post.html");
    echo "<br>";

    ////////////////////////////////////////////////

    /* Open and Read File   */

    $fptr=fopen("Myfile.txt","r");
    //echo var_dump($fptr);
    if(!$fptr){
        die("Unable to open file");
    }
    else{

        /*  Using fread()    */

        //$content=fread($fptr,3);  //read 3 chracters only
        /*$content=fread($fptr,filesize("Myfile.txt"));   //read all file
        fclose($fptr);
        echo $content;
        echo "<br>";*/

        /*  Using fgets()   */
        
        //echo fgets($fptr);  // read line by line
        //echo fgets($fptr);
        //echo fgets($fptr);

        /*while($a=fgets($fptr)){
            echo $a;
        }
        echo "<br>";
        fclose($fptr);
        echo "End of file";
        echo "<br>";*/

        /*  Using fgetc()    */

        /*echo fgetc($fptr);  // read chracter by character
        echo fgetc($fptr);
        echo fgetc($fptr);*/

        while($a=fgetc($fptr)){
            echo $a;
        }
        echo "<br>";
        echo "<br>";
        fclose($fptr);
        echo "End of file";
        echo "<br>";
        }
?>