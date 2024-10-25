<?php

require 'vendor/autoload.php';

$config = new \LLPhant\OllamaConfig();
$config->model = 'llama3.1:8b-instruct-q4_0';
$chat = new \LLPhant\Chat\OllamaChat($config);

$response = $chat->generateText('What is the secret of life?');
echo $response;
