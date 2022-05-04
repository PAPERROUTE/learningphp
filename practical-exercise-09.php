<?php 

/* Step 1: Create a link saying Click Here, and set the link href to pass
some parameters and use the GET super global to see it
   Step 2: Set a cookie that expires in one week
   Step 3: Start a session and set it to value, any value you want.
*/

session_start();
$_SESSION['message'] = "Hello";

if(isset[$_GET['source']]) {
    echo $_GET['source'] . "<br />";
};

$name = "SomeCookie";
$value = 100;
$expiration = time() + (60*60*24*7);
setcookie($name, $value, $expiration);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="practical-exercise-09?source=30134">CLICK HERE</a>

    <?php 
        if(isset($_COOKIE[$name])) {
            echo $name . "<br />";
        };

        if(isset($_SESSION['message'])) {
            echo $_SESSION['message'];
        };
    ?>
</body>
</html>