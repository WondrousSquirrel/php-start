<?php
	# $_SERVER SUPERGLOBAL

	# Create Server Array
	$server = [
        'Host Server Name' => $_SERVER['SERVER_NAME'],  # 
        'Host Header' => $_SERVER['HTTP_HOST'],  # содержимое заголовка хост: из текущего запроса, если имеется
        'Server Software' => $_SERVER['SERVER_SOFTWARE'],  # информация о сервере, пхп, ОС и тд.
        'Document Root' => $_SERVER['DOCUMENT_ROOT'],  # root папка
        'Current Page' => $_SERVER['PHP_SELF'],  # текущая страница
        'Script Name' => $_SERVER['SCRIPT_NAME'],
        'Absolute Path' => $_SERVER['SCRIPT_FILENAME']
    ];
    
    #print_r($server);
    # Create Client Array
    $client = [
        'Client System info' => $_SERVER['HTTP_USER_AGENT'],
        'Client IP' => $_SERVER['REMOTE_ADDR'],  # отображает ip адресс клиента
        'Client Port' => $_SERVER['REMOTE_PORT']
    ];

    #print_r($client);
?>
