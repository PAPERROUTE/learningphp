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

    /* Step 1: Make an if statement with elseif and else to finally
    display a string saying, I Love PHP

       Step 2: Make a forloop that displays 10 numbers

       Step 3: Make a switch statement that test against one 
       condition with at least 5 cases
    */

    $number = 1;
    $savings = 15;
    $counter = 0;
    if ($number == 1) {
        echo "I Love PHP";
    } elseif ($number == 2) {
        echo "I'm starting to like PHP";
    } else {
        echo "PHP is not the language for me";
    }


    for($digit = 0; $digit <= 10; $digit++){
        echo $counter . ": " . $digit . "<br />";
    }

    switch($savings):
        case 5: 
            echo "I'm 10 more dollars away from my goal!";
            break;
        case 10: 
            echo "I'm 5 more dollars away from my goals!";
            break;
        case 15:
            echo "I've reached my goal!";
            break;

?>


</body>
</html>