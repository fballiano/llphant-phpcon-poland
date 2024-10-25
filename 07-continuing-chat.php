<?php

require 'vendor/autoload.php';

$config = new \LLPhant\OllamaConfig();
$config->model = 'llama3.1:8b-instruct-q4_0';
$chat = new \LLPhant\Chat\OllamaChat($config);

echo $chat->generateChat([
    \LLPhant\Chat\Message::system("You're a helpful assistant, answer in a short and concise way, do not correct yourself"),
    \LLPhant\Chat\Message::user('What is Fabrizio email address?'),
    \LLPhant\Chat\Message::toolResult('Fabrizio\'s info: {name:Fabrizio, email: fabrizio@fabrizio.com, phone: +34123123123}'),
    \LLPhant\Chat\Message::assistant('Fabrizio\'s email address is fabrizio@fabrizio.com'),
    \LLPhant\Chat\Message::user('And what is his phone number?'),
]);