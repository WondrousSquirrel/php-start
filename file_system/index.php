<?php
    $path = '/dir1/myfile.php';
    $file = '1.txt';

/*
    # return filename
    # echo basename($path);

    # return filename without ext
    # echo basename($path, '.php');

    # return directory name fom the path
    echo dirname($path);
*/
    # check if file exists
    # echo file_exists($file);

    # get absolute path
    # echo realpath($file);

    # checks to see if file
    # echo is_file($file);

    # check if file writable
    # echo is_writable($file);

    # file size
    # echo filesize($file);

    # create a directory
    # mkdir('testing');

    # delete directory if empty
    # rmdir('testing');

    # copy file
    # echo copy('1.txt', '2.txt');
    
    # rename file
    # rename('2.txt', 'myfile.txt');

    # delete file
    # unlink('myfile.txt');

    # write from file to string
    # echo file_get_contents($file);

    # write to the file
    # echo file_put_contents($file, 'My name is Alex');
/*
    $current = file_get_contents($file);
    $current .=  ' My name is Alex';

    file_put_contents($file, $current);
*/
/*
    $handle = fopen($file, 'r');
    $data = fread($handle, filesize($file));
    echo $data
    fclose($handle);
*/
    $handle = fopen('2.txt', 'w');
    $text = 'John Doe';
    fwrite($handle, $text);
    fclose($handle);
?>