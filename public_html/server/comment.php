<?php
$text = str_repeat(chr(rand(65, 65+26-1)), 10);
echo json_encode([['author' => 'User_'. rand(1000, 9999), 'text' => $text]]);