<?php
    if(isset($_GET['name'])) {  # isset - определяет была ли установленна переменная
        print_r($_GET);
        $name = htmlentities ($_GET['email']);  # htmlentities - преобразует все символы в html-сущности
        echo $name;
    }

    if(isset($_POST['name'])) {  # отправляет данные через заголовки, а не через url, более безопасный вариант.
        print_r($_GET);
        $name = htmlentities ($_GET['email']);  
        echo $name;
    }
/*

    if(isset($_REQUEST['name'])) { 
        print_r($_REQUEST);
        $name = htmlentities ($_REQUEST['email']);  
        echo $name;
    }

    echo $_SERVER['QUERY_STRING'];  # отображение цельной строкой
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web page</title>
</head>
<body>
    <form method='GET' action='get_post.php'>
        <div>
            <label>Name</label><br> 
            <input type='text' name='name'>
        </div>
        <div>
            <label>Email</label><br> 
            <input type='text' name='email'>
        </div>
        <input type='submit' value='Submit'>
    </form>
</body>
</html>