<?php

    # substr()
    # Возвращает часть строки

    # $output = substr('Hello', 1, 3);
    #$output = substr('Hello', -2);
   # echo $output;

    # strlen()
    # размер строки
    # $output = strlen('Hello World');
    # echo $output;

    #strpos()
    # находит позицию первого вхождения символа

    # $output = strpos('Hello World', 'o');
    # echo $output;

    #strrpos()
    # последнее появления символа

    # $output = strrpos('Hello World', 'o');
    # echo $output;

    # trim()
    # удаляет пробелы

/*
    $text = 'Hello World         ';
    var_dump($text);

    $trimmed = trim($text);
    var_dump($trimmed);
*/

/*
    #strtoupper() / strtolower()
    # переводи в верхний регистр / переводит в нижний регистр

    $output = strtoupper('hi');
    echo $output;

    $output = strtolower('HI');
    echo $output;
*/

    #ucwords()
    # каждое слово с большой буквы
    # $output = ucwords('lorem ipsum blah blah');
    # echo $output;

    #str_replace()
    # заменяет значение на заданное

    # $text = 'Hello World';
    # $output = str_replace('World', 'Everyone ', $text);
    # echo $output;

    # is_string()
    # проверка на строку, результат булеан

    # $val = 'Hello';
    # $output = is_string($val);
    # echo $output;

/*
    $values = [true, false, null, 'abc', 33, '33', '', ','];

    foreach($values as $value){
        if(is_string($value)){
            echo "{$value} is a string <br>";
        }
    }
*/

    # gzcompress()
    # сжимает строку 

    $string = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
    Integer dictum blandit sem, a rutrum odio finibus suscipit. Fusce quis ante eu nisl posuere convallis quis non nibh. 
    Mauris euismod lacus id ex fringilla, ac viverra urna pretium. Pellentesque non auctor nunc, et posuere mauris. 
    Sed at orci ac urna gravida aliquet. Etiam libero diam, mollis pellentesque pellentesque tristique, ultrices sed purus. 
    Nunc at metus sit amet ipsum sodales blandit. Nullam sit amet dapibus quam, ut semper tellus. 
    Duis ultricies leo viverra, tristique lectus quis, dictum tellus. 
    In rutrum rhoncus turpis. Cras non tortor elit. Curabitur ac convallis ipsum.';

    $compressed = gzcompress($string);
    echo "{$compressed}<br><br>";

    $original = gzuncompress($compressed);
    echo $original;

?>