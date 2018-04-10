<!--
    Куки - небольшой фрагмент данных хранимый на кмпьютере пользователя.

    Можно установить cookies при помощи функций setcookie() или setrawcookie(). 
    Cookies являются частью HTTP-заголовка, поэтому setcookie() должна вызываться до любого вывода данных в браузер. 
    Это то же самое ограничение, которое имеет функция header(). 

    Лучше использовать сессии для более лучшей защиты данных.
 -->

<?php
    if(isset($_POST['submit'])){
        $username = htmlentities($_POST['username']);

        # имя_куки, занчение, время_жизни
        setcookie('username', $username, time() + 3600);
        # hour

        header('Location: page2.php');
    }
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
    <form method='POST' action='<?php echo $_SERVER['PHP_SELF']; ?>'>
        <input type='text' name='username' placeholder='Enter Username'>
        <br>
        <input type='submit' name='submit' value='submit'>
    </form>
</body>
</html>