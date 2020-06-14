<?php
    
    echo "<h2>File Writing and Appending</h2>";

    // Writing in file
    $fptr=fopen("WriteFile.txt","w");
    fwrite($fptr,"This is best file new line again");   // overwrite file

    $fptr=fopen("WriteFile.txt","r");
    $content=fread($fptr,filesize("Myfile.txt"));   
    echo $content;
    echo "<br>";
    echo "<br>";
    echo "<br>";
    fclose($fptr);
    

    // Appending to file
    $fptr=fopen("AppendFile.txt","a");
    fwrite($fptr,"This is best file new line again");

    $fptr=fopen("AppendFile.txt","r");
    $content=fread($fptr,filesize("AppendFile.txt"));   
    echo $content;
    echo "<br>";
    fclose($fptr);
    
    

       
?>