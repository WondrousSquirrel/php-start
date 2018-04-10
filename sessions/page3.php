<?php
    session_start();

    print_r($_SESSION);

    $name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';
    $email = $_SESSION['email'] ?? 'Not subscribed ';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hello there <?php echo $name; ?></h1>
    <a href ='page4.php'>quit</a>
</body>
</html>