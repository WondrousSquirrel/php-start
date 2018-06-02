<?php
	// создаем подключение в БД,
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME); // mysqlI -  i for Improved

	// Проверка соединения
	if(mysqli_connect_errno()) {
		// Подключение не успешно
		echo 'Не удалось подключиться к Базе Данных'. mysqli_connect_errno();
	} else {
		echo "Подключение успешно <br>";
	}
?>