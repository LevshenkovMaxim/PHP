<?php
$files = ['1.txt', '2.txt', '3.txt'];

foreach ($files as $file) {
    if (file_exists($file)) {
        echo "$file существует.<br>";
    } else {
        echo "$file не существует.<br>";
    }
}
