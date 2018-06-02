<?php
	require('config.php');
	require('db.php');

	// Создаем запрос в Базу Данных
	$query = 'SELECT * FROM table_one ORDER BY name ASC ';

	// получаем из базы данные по запросу
	$result = $conn->query($query);

	// Проверка на наличие столбцов в БД
	if($result->num_rows > 0) {
		// отображение данных по столбцам
		while( $row = $result->fetch_assoc()) {
			echo "id:" . $row['ID'] . " - Name: " . $row['Name'] . "<br>";
		}
	} else {
		echo "База пуста";
	}
	// закрываем подключение к Базе
	mysqli_close($conn);
?>