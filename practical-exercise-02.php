<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php 


/* Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20: 

   Step 2: Add the two variables and display the sum with echo:

   Step 3: Make 2 arrays with the same values, one regular and the other associative:

*/

$number1 = 10;
$number2 = 20;

echo $number1 + $number2; 

echo "<br />";

// $array1 = array("max", "ella", "sam", "john");
$array1 = array(1, 2, 3, 4, 5);
// $array2 = array("first" => 'max', "second" => 'ella', "third" => 'sam', "fourth" => 'john');
$array2 = array("first" => 1, "second" => 2, "third" => 3, "fourth" => 4);

echo $array1[0];

echo "<br />";

echo $array2["first"];

?>


</body>
</html>