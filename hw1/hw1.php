<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello, World!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        header {
            background-color: #f8f9fa;
            padding: 20px;
            border-bottom: 1px solid #ccc;
        }
        footer {
            background-color: #f8f9fa;
            padding: 10px;
            border-top: 1px solid #ccc;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .main-content {
            margin: 50px 0;
        }
    </style>
</head>
<body>

<header>
    <h1><img src="https://www.ucheba.ru/pix/upload/default/logo_3_(1).png" alt="Логотип МосПолитеха" style="height: 60px; position: fixed; left: 0; top: 0; z-index: 500;">2.1.Домашняя работа: Hello, World!</h1>
</header>

<main class="main-content">
    <h2><?php echo "Hello, World!"; ?></h2>
</main>

<footer>
    Задание для самостоятельной работы
</footer>

</body>
</html>