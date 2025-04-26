<?php
    $author = new User('Иван');
    $article = new Article('Заголовок', 'Текст', $author);
    var_dump($article);
