<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4.1. Домашняя работа: Feedback Form.</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <img src="https://www.ucheba.ru/pix/upload/default/logo_3_(1).png" alt="Логотип МосПолитеха" style="height: 60px; position: fixed; left: 0; top: 0; z-index: 500;">
        <h1>4.1. Домашняя работа: Feedback Form.</h1>
    </header>
    <main>
        <form action="https://httpbin.org/post" method="POST">
            <label for="name">Имя пользователя:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">E-mail пользователя:</label>
            <input type="email" id="email" name="email" required>

            <label for="type">Тип обращения:</label>
            <select id="type" name="type" required>
                <option value="жалоба">Жалоба</option>
                <option value="предложение">Предложение</option>
                <option value="благодарность">Благодарность</option>
            </select>

            <label for="message">Текст обращения:</label>
            <textarea id="message" name="message" required></textarea>

            <label>Вариант ответа:</label>
            <label><input type="checkbox" name="response[]" value="sms"> SMS</label>
            <label><input type="checkbox" name="response[]" value="email"> E-mail</label>

            <button type="submit">Отправить</button>
        </form>
        <a href="result.php">Перейти на страницу с результатами</a>
    </main>
    <footer>
        Задание для самостоятельной работы
    </footer>
</body>
</html>
