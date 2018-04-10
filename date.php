<?php
    //echo date('d'); // day
    //echo date('m'); // month
    //echo date('y'); // year
    //echo date('l'); // day of the week

    //echo date('Y/m/d'); 
    //echo date('d-m-y'); 

    // Set timezone
    date_default_timezone_set('Europe/Kiev');

    //echo date('h:i:s'); // hour-min-sec
    $timestamp = mktime(10, 14, 54, 9, 9, 1994);

    //echo $timestamp;

    //echo date('m/d/y', $timestamp);
    
    $timestamp2 = strtotime('8:00pm March 22 2094');
    echo date('m/d/y', $timestamp2);

?>