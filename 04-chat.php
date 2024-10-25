<?php

require 'vendor/autoload.php';

$config = new \LLPhant\OllamaConfig();
$config->model = 'llama3.1:8b-instruct-q4_0';
$chat = new \LLPhant\Chat\OllamaChat($config);

echo $chat->generateChat([
    \LLPhant\Chat\Message::system("You're a helpful assistant, answer in a short and concise way, do not correct yourself"),
    \LLPhant\Chat\Message::user('What day will tomorrow be?'),
    \LLPhant\Chat\Message::assistant('Tomorrow is 25 Dicember 2030'),
    \LLPhant\Chat\Message::user('So today is?'),
]);