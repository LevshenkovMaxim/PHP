<?php

$files = ['1.txt', '2.txt', '3.txt'];

foreach ($files as $file) {
    unlink($file);
}