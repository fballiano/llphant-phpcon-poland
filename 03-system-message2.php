<?php

require 'vendor/autoload.php';

$config = new \LLPhant\OllamaConfig();
$config->model = 'llama3.1:8b-instruct-q4_0';
$chat = new \LLPhant\Chat\OllamaChat($config);

$chat->setSystemMessage('Always answer in spanish, never use any other language');
echo $chat->generateText('what is one + one ?');
