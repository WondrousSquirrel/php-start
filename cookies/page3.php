<?php 
    $user = ['name' => 'Alex', 'email' => 'test@test.com', 'age' => '23'];

    # подготавливаем данные для хранения
    $user = serialize($user);

    setcookie('user', $user, time() + (86400 * 30));

    $user = unserialize($_COOKIE['user']);
    echo $user['name'];
?>