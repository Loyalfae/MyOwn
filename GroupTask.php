<?php
//You are required to work as a team and complete the following task during the online session
// we will check your implementation on 16.02.2022 and the team repo must contain the following task
// Each one of you will first do it in your own repo (or branch) and then the final version in the team repo. 
// This task is not graded however will have some impact on the final grade
// It also will help you to practice utlizing GitHub in project work

# 1. Create/read a text file by using approprite php functions 
    # Step 1: check if file exists or not
$newfile =fopen('hello.txt','a') or die ("Failed to create a file");
$txt ="Hello , I'm Wafa and I'm a member of team 5. <br>";
fwrite($newfile, $txt);
fclose($newfile);

 ECHO "<h2> Checking if file exists or Not</h2>";
 if(file_exists("hello.txt"))
 {
     ECHO "the file exists !";
 } else 
     ECHO " the file doesn't exists !";

    # Step 2: Open the file using appropriate mode. (each member opens the file in different mode)
    ECHO "<h2> Open the file</h2>";
    $openfile = fopen("hello.txt", 'r') 
    or die("File does not exist!");

    $pointer = fgets($openfile);
    ECHO $pointer;
    fclose($openfile);

    # Step 3: Use fwrite/fread function to write/read on the file your team name and members name. 
    ECHO "<h2> read on the file your team name and members name</h2>";
  $fname = "hello.txt";
  $handle = fopen($fname,"r")
  $cont = fread($handle, filesize($fname));
  ECHO $cont;
  fclose($handle);


?>