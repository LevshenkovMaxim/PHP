<?php
$headers = get_headers('https://httpbin.org/get');
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Результаты</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <img src="https://www.ucheba.ru/pix/upload/default/logo_3_(1).png" alt="Логотип МосПолитеха" style="height: 60px; position: fixed; left: 0; top: 0; z-index: 500;">
        <h1>Результаты работы функции get_headers</h1>
    </header>
    <main>
        <textarea rows="20" cols="100" readonly><?php echo implode("\n", $headers); ?></textarea>
        <br>
        <a href="index.php">Вернуться на страницу с формой</a>
    </main>
    <footer>
        Задание для самостоятельной работы
    </footer>
</body>
</html>
