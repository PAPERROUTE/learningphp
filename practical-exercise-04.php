<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php 

/* step 1: define a function and make it return a calculation of 2 numbers 
   step 2: make a function that passes parameters and call it using parameter values 

*/

function calculation(){
    $number1 = 20;
    $number2 = 50;

    $sum = $number1 + $number2;

    return $sum;
}

$theSum = calculation();

echo $theSum;

function Hola($hello) {
    echo $hello;
}

Hola("hey is that spanish???");

?>


</body>
</html>