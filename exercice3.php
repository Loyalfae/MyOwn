<?php

// 1. Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not:
ECHO "Question 1: " ;
ECHO "<br>";
$Month = date("F");
if ($Month == "August") {
    ECHO "It's August, so it's still holiday. <br>";
} else{
  
    ECHO "Not August, This is ". $Month ." so i don't have any holidays <br>";
}

ECHO "<br>";
// 2. Assign color red to a variable name $color and check to print one the following responses using if else statement.
ECHO "Question 2: " ;
ECHO "<br>";
$color = "red";
if ($color == "red") ECHO "The color is red. <br>";
else ECHO "The color is not red. <br>";

ECHO "<br>";

// 3. Write a program to grade students based on their total score for a subject. The grading scheme is: Excellent : >80 ;Great >70 & less than 80;Good >60 & less than 70; Pass >50 & less than 60 & Fail <50
ECHO "Question 3: " ;
ECHO "<br>";
$grade=70;
ECHO "The grade is: ";

if($grade>80){
    ECHO "Excellent";
}
elseif($grade>70){
    ECHO "Great";
}
elseif($grade>60){
    ECHO "Good";}
elseif($grade>50){
    ECHO "Pass";}
else{
    ECHO "Fail";}
ECHO "<br><br>";
ECHO "Question 4: " ;
ECHO "<br>";
// 4. Write a program to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting.)
?>

<form action="exercise3.php" method="post">
name: <input type="text" name="name" required>
age: <input type="number" min=0 name="age" required>
<input type="Submit" name='Submit'>
</form>

<?php

if(isset($_POST['Submit'])){
    $name= $_POST['name'];
    $age = $_POST['age'];
    if($age>=18){
        ECHO $name . "<b> is eligible for voting</b>";}
    else{
        ECHO $name . "<b> is not eligible for voting</b>";}
    }
        ECHO "<br>";
// 5. Use a looping statement to construct the following pattern: 
/*
12345678
1234567
123456
12345
1234
123
12
1
*/
ECHO "Question 5 :" ;
ECHO "<br>";
$number = "123456789";
while($number > strlen($number)){
    echo substr($number, 0, -1) . "<br>";
    $number = substr($number, 0, -1);
} 
ECHO "<br>";

// 6. Use While loop to print the following pattern: 
/*
*
**
***
****
*****
******
*******
********
*/
ECHO "Question 6 :" ;
ECHO "<br>";
$etoile = "*";
for ($i = 1; $i < 9; $i++) ECHO str_repeat($etoile, $i) . "<br>";

ECHO "<br>";
//7. Create a GitHub repo and enable GitHub pages for the repo

?>


