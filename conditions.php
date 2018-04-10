<?php

    /*
        Logical
            - AND  &&
            - OR   ||
            - XOR  1 true but not both
     */

    $num = 5;

    if($num == 5){
        echo 'Passed 5';
    } elseif($num == 6) {
        echo '6 passed';
    } else {
        echo 'did not pass';
    }

    $color = 'green';
    
    switch($color){
        case 'red': 
            echo 'red color';
            break;
        case 'green':
            echo 'green color';
            break;
    }
?>