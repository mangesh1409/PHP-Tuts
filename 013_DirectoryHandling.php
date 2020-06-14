<?php
    echo "<h2>File Handling</h2>";

    /* Create Directory */

    /*if(mkdir("E:/Mangesh/Programs/Java/Folder/new/b/New_Folder",0777,true)){
        echo "TRUE";
    }
    else{
        echo "FALSE";
    }*/
////////////////////////////////////////////////////////////////////////////////////

    /* Check Presence of Directory  */

    /*$path="E:/Mangesh/Programs/Java/Folder/new/b/New_Folder";
    if(is_dir($path))
    {
        echo "Directory is present";
    }
    else
    {
        echo "Directory is not present";
    }*/
////////////////////////////////////////////////////////////////////////////////////

    /*  Getting name of current working directory  */

    /*echo "You are in ->",getcwd()."<br>;*/
////////////////////////////////////////////////////////////////////////////////////

    /*  Changing current working directory  */

    /*echo "You are in ->",getcwd()."<br>";
    if(chdir("E:/Mangesh/Programs/Java"))
    {
        echo "Directory is Changed ";
        echo "You are in ->",getcwd()."<br>";
    }
    else
    {
        echo "Problem in changing directory";
    }*/
////////////////////////////////////////////////////////////////////////////////////

    /* Open Directory and print subdirectories   */

    /*$dir=opendir("E:/Mangesh/Programs/Java");
    echo $dir."<br>";

    while(($file=readdir($dir))!=false)
    {
        echo "Name of file is : ",$file,"<br>";
    }
    closedir($dir);*/
////////////////////////////////////////////////////////////////////////////////////

    /* Rewinding Handle of directory to start   */

   /* $dir=opendir("E:/Mangesh/Programs/Java");
    echo $dir."<br>";

    while(($file=readdir($dir))!=false)
    {
        echo "Name of file is : ",$file,"<br>";
    }
    echo "<br>";

    rewinddir($dir);
    echo "After Rewind<br>";
    while(($file=readdir($dir))!=false)
    {
        echo "Name of file is : ",$file,"<br>";
    }
    echo "<br>";
    closedir($dir); */
////////////////////////////////////////////////////////////////////////////////////

    /*  Closing Directory    */

   /* $dir=opendir("E:/Mangesh/Programs/Java");
    echo $dir."<br>";
    closedir($dir);*/
////////////////////////////////////////////////////////////////////////////////////

    /* Remove Directory */

    /*if(rmdir("E:/Mangesh/Programs/Java/New Folder"))
    {
        echo "Directory Removed Sucessfully";
    }
    else
    {
        echo "Problem to remove directory";
    }*/
////////////////////////////////////////////////////////////////////////////////////

    /* Getting name of directory    */

    /*echo dirname("E:/Mangesh/Programs/Java/demo.java");*/
////////////////////////////////////////////////////////////////////////////////////

    /* Getting information about Path   */

    /*print_r(pathinfo("E:/Mangesh/Programs/Java/demo.java"));
    echo "<br>";
    echo "<br>";
    echo var_dump(pathinfo("E:/Mangesh/Programs/Java/demo.java"));*/
////////////////////////////////////////////////////////////////////////////////////

    /* Finding Absolute Path    */

    $filename="001_VariableCreation.php";
    echo "Absolute path of $filename is ",realpath($filename);
?>