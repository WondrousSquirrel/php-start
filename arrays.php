<?php
    /*
        - Indexed
        - Associative
        - Multi-dimensional
    */
    # Indexed
    $people = array('Rick','Carl');
    echo $people[1];
    echo count($people);
    #print_r($people);
    var_dump($people);
    
    # Associative
    $peoples = array('Grimes' => 40, 'Morgan' => 41);
    $ids = [22 => 'Brad', 31 => 'Jose'];
    #echo $peoples['Grimes'];
    #echo $ids[22];

    # Multi-dimenstional
    $cars = array(
        array('Honda', 20, 10),
        array('Suzuki', 3, 19),
        array('BMW', 11, 5),
    );
    echo $cars[1][0];
?>