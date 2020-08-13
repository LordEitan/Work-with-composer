<?php

$client = new \GuzzleHttp\Client(['verify' => false]);
$response = $client->request('GET', 'https://stage.yaycare.app/api/articles');

$res = $response->getBody();
$data = json_decode($res, true);