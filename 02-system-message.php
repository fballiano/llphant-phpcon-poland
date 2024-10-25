<?php

require 'vendor/autoload.php';

$config = new \LLPhant\OllamaConfig();
$config->model = 'llama3.1:8b-instruct-q4_0';
$chat = new \LLPhant\Chat\OllamaChat($config);

$chat->setSystemMessage('Whatever we ask you, you MUST answer "ok", lowercase, no punctuation');
echo $chat->generateText('what is one + one ?');
