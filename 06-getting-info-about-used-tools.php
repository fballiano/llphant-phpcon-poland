<?php

require 'vendor/autoload.php';

$config = new \LLPhant\OllamaConfig();
$config->model = 'llama3.1:8b-instruct-q4_0';
$chat = new \LLPhant\Chat\OllamaChat($config);

class DemoTools
{
    /**
     * Returns the current date in YYYY-MM-DD format
     */
    public function getCurrentDate(): string
    {
        return date('Y-m-d');
    }

    /**
     * Returns an array contains all info about the user of the application
     */
    public function getUserDataByName(string $name): string
    {
        $userData = [
            'name' => $name,
            'surname' => 'SampleSurname',
            'phone' => '0123456789',
            'email' => 'example@example.com',
        ];
        return json_encode($userData);
    }
}

$demoTools = new DemoTools();
$tools = [];
$tools[] = \LLPhant\Chat\FunctionInfo\FunctionBuilder::buildFunctionInfo($demoTools, 'getCurrentDate');
$tools[] = \LLPhant\Chat\FunctionInfo\FunctionBuilder::buildFunctionInfo($demoTools, 'getUserDataByName');
$chat->setTools($tools);

echo $chat->generateChat([
    \LLPhant\Chat\Message::user('What is Fabrizio email address?'),
]);
echo "\n\n";

print_r($chat->functionsCalled);