<?php
    # For loop
    # @params - init, condition, increment
    /*
    for ($i = 0; $i < 10; $i++){
        echo $i;
    }
    */
    # While loop
    $i = 0;
    while($i < 10){
        echo $i;
        echo '<br>';
        $i++;
    }

    # Do...While
    # @params - condiotion
    /*
        do {
            ...
        }
        while ($i < 10)
    */ 
    
    # Foreach loop - for arrays
    $peaple = array('Rick' => 43, 'Niggan' => 54, 'Carl' => 16);

    foreach($peaple as $person => $yo) {
        echo $person.': '.$yo;
        echo '<br>';
    }
?>