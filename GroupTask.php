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
    # Step 3: Use fwrite/fread function to write/read on the file your team name and members name. 
    # Step 4: Close the file 
    ECHO "<h2> Open the file & read on the file your team name and members name</h2>";
    $openfile = fopen("hello.txt", 'r') 
    or die("File does not exist!");

    $pointer = fgets($openfile);
    ECHO $pointer;
    fclose($openfile);


#2. Uploaing files 
     # Step 1: Create a simple html form to upload a file. 
     # Step 2: You are required to limit the upload file size to 2 MB. 
     # Step 3: Make sure that users can submit only images. 
     # Step 4: Upon successful upload, you print a message "File uploaded successfully" and also 
     # provide the link to the directory where files are uploaded.
   

?>