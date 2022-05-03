<?php 

if(isset($_POST['submit'])) {

    $username = $_POST['username'];
    $username = $_POST['password'];

    echo $username;
};


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
    


<?php 
/* Step 1: Make a form that submits one value to POST super global */
?>

<form action="practical-exercise-06.php" method="post">
    <input type="text" name="username" placeholder="username">
    <input type="password" name="password" placeholder="password">
    <input type="submit" name="submit" value="submit">
</form>



</body>
</html>