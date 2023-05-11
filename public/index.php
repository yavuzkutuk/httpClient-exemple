<?php
require '../vendor/autoload.php';

use Symfony\Component\HttpClient\HttpClient;

$client = HttpClient::create();
$response = $client->request(
    'GET',
    'https://api.github.com/repos/symfony/symfony-docs'
);

$content = $response->getContent();
$content = $response->toArray();
var_dump($content);