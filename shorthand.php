<?php

    $loggedIn = true;
    $arr = [1,4,5,6];
/*
    if($loggedIn) {
        echo 'you are logged in';
    } else {
        echo ' you are not logged in';
    }
*/
    # ? true : false
    # echo ($loggedIn) ? 'you are logged in' : ' you are not logged in'; 
/*
    $isRegister = ($loggedIn == true) ? true : false;
    echo $isRegister;

    $age = 7;
    $score = 5;

    echo 'Your score is '.($score > 10 ? ($age > 10 ? 'average' : 'exceptional'):($age > 10 ? 'horrible' : 'average'));
*/
?>

<div>
    <?php
        if($loggedIn) { ?>
            <h1> Welcome User </h1>
       <?php } else { ?>
            <h1> Welcome Guest </h1>
       <?php  }?>
</div>

<div>
<?php if ($loggedIn) : ?>
    <h1> Welcome User </h1>
<?php endif; ?>
</div>

<div>
<?php foreach($arr as $val) : ?>
    <?php echo $val ?>
<?php endforeach ?>
</div>