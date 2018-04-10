<?php 
    $people[] = 'Steeve';
    $people[] = 'Alex';
    $people[] = 'Rick';
    $people[] = 'John';
    $people[] = 'Tom';
    $people[] = 'Evan';
    $people[] = 'Linda';
    $people[] = 'Amanda';
    $people[] = 'Carl';
    $people[] = 'Jose';
    $people[] = 'Brad';


    # get query string
    $q = $_REQUEST['q'];

    $suggestion ='';

    # get suggestion

    if($q !== '') {
        $q= strtolower($q);
        $len = strlen($q);

        foreach($people as $person) {
            if(stristr($q, substr($person, 0, $len))) {
                if($suggestion === '') {
                    $suggestion = $person;
                } else {
                    $suggestion .= ", $person";
                }
            }
        }
    }


    echo $suggestion === '' ? 'No suggestion' : $suggestion;
?>