<?php
 ECHO "<h1> Array Exercise </h1>";
 ?>
 <?php
/*
1. Write a php script to display courses as list. Use <li>
$courses=array("PHP", "HTML", "JavaScript", "CMS", "Project")
*/
ECHO "<h2> Task1 </h2>";
$courses=array("PHP", "HTML", "JavaScript", "CMS", "Project");
$counter=count($courses);
for ($i=0; $i<$counter; $i++){
    ECHO "<li>$courses[$i]</li>";
}
?>

<?php
/* 2. The unset() function is used to remove element from the array.
The var_dump() function is used to dump information about a variable. 
array_values() is an inbuilt function that 
returns all the values of an array and not the keys.
Delete an element from the array below:
$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
*/
ECHO "<h2> Task2 </h2>";
$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
unset($courses1[4]);
$counter=count($courses1);
for ($i=0; $i<$counter; $i++){
    ECHO "<li>$courses1[$i]</li>";
}
ECHO "<br>";
?>

<?php
/* 
3. Sort the following array 
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
a) ascending order sort by value
b) ascending order sort by Key
c) descending order sort by Value
d) descending order sort by Key
*/
ECHO "<h2> Task3 </h2>";
ECHO "<h3> a) ascending order sort by value </h3>";
$courses3=array("course1" => "PHP", "course2" => "HTML", "course3" => "JavaScript", "course4" => "CMS", "course5" => "Project");
asort($courses3);
foreach ($courses3 as $c=>$c_value){
    ECHO $c . " - " . $c_value . "<br>";
}
ECHO"<br>";
ECHO "<h3> b) ascending order sort by Key </h3>";
$courses3=array("course1" => "PHP", "course2" => "HTML", "course3" => "JavaScript", "course4" => "CMS", "course5" => "Project");
ksort($courses3);
foreach ($courses3 as $c=>$c_value){
    ECHO $c . " - " . $c_value . "<br>";
}
ECHO "<br>";
ECHO "<h3> c) descending order sort by Value </h3>";
$courses3=array("course1" => "PHP", "course2" => "HTML", "course3" => "JavaScript", "course4" => "CMS", "course5" => "Project");
arsort($courses3);
foreach ($courses3 as $c=>$c_value){
    ECHO $c . " - " . $c_value . "<br>";
}
ECHO "<br>";


ECHO "<h3> d) descending order sort by Key </h3>";
$courses3=array("course1" => "PHP", "course2" => "HTML", "course3" => "JavaScript", "course4" => "CMS", "course5" => "Project");
krsort($courses3);
foreach ($courses3 as $c=>$c_value){
    ECHO $c . " - " . $c_value . "<br>";
}
ECHO "<br>";

?>
<?php
/* 
 4. Change the following array's all values to upper case.
 $courses4=array("php", "html", "javascript", "cms", "project");
*/
ECHO "<h2> Task4 </h2>";
$courses4=array("php", "html", "javascript", "cms", "project");
$counter=count($courses4);
for ($i=0; $i<$counter; $i++){
    ECHO strtoupper("<li>$courses4[$i]</li>");
}
ECHO "<br>";



// 5. Create an array that holds your favorite colors and print them. (indexed arrays)
ECHO "<h2> Task5 </h2>";
ECHO " These are my favorite colors below : <br>";
$fav_colors=array("dark blue", "crimson", "black", "silver");
$color_num=count($fav_colors);
for ($i=0; $i<$color_num; $i++){
    ECHO $fav_colors[$i] . "<br>";
}
ECHO "<br>";


?>
<?php
// 6. List all your favorite colors and their hexadecimal equivalents. (associative arrays)
ECHO "<h2> Task6 </h2>";

$fav_colors=array("dark blue" => "#00008b", "crimson" => "#990000", "black" => "#000000", "silver" => "#C0C0C0");
foreach ($fav_colors as $c=>$c_value){
    ECHO $c . " = Hexadecimal equivalent is : " . $c_value . "<br>";
}
ECHO "<br>"

?>
<?php
// 7. Include 12 months in an array named month and print them using loop statement.
ECHO "<h2> Task7 </h2>";
$month=array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
$month_num=count($month);
for ($i=0; $i<$month_num; $i++){
    ECHO $month[$i] . "<br>";
}
ECHO "<br>";

?>
<?php
/*
 8. PHP script to calculate and display average temperature, five lowest and highest temperatures.

Recorded temperatures : 78, 60, 62, 68, 71, 68, 73,
 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 
 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
Write comments to explain the following code (when asked):
*/
ECHO "<h2> Task8 </h2>";
ECHO "<hr><h2> Calculation average temperature: </h2>";
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
ECHO "<br>";
?>
<?php
ECHO "What is explode and what does the below code do? <br> " ;
ECHO "Explode() is a built in function in PHP used to split a string in different strings. The explode() function splits a string based on a string delimiter, i.e. it splits the string wherever the delimiter character occurs. This functions returns an array containing the strings formed by splitting the original string <br>";
ECHO "The code will produce an array from the value ALL TEMPERATURES of the variable related to month that are seperated with a comma .";
ECHO "<br>";
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
ECHO "<br>";
ECHO " WHat is count ? <br> ";
ECHO "The count() function returns the number of elements in an array.<br>"; 
ECHO "<br>";
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 


?>
<?php
ECHO "<br>";
ECHO " WHat does sort do ?<br> ";
ECHO "The sort() function is an inbuilt function in PHP and is used to sort an array in ascending order i.e, smaller to greater. It sorts the actual array and hence changes are reflected in the original array itself. <br>";
ECHO "<br>";
sort($temp_array);
echo "<br> List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "<br>List of five highest temperatures :";
// explain the following loop
ECHO "EXPLAIN THE LOOP BELOW ";
ECHO "The loop will display the five highest value of a temperatures and since we already sorted the array ascending. the described loop will print for us the last five values.";

for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}
?>