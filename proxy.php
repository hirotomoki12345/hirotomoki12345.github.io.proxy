<?php

namespace zonuexe\ZoProxy;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Psr7;

require __DIR__ . '/../vendor/autoload.php';

// ここはいい感じにやってね
$host_table = [
    'hoge.example.com' => [
        'host' => 'localhost',
        'port' => 3939,
        'scheme' => 'http',
    ],
    'foo.example.com' => [
        'host' => 'foo.example.jp',
        'scheme' => 'https',
    ],
];

$request = Psr7\ServerRequest::fromGlobals();
$new_uri = $request->getUri()->withPort(80);

$key = $new_uri->getHost();
$port = $new_uri->getPort();
if ($port !== null && !Psr7\Uri::isDefaultPort($port)) {
    $key .= ":{$port}";
}

if (isset($host_table[$key])) {
    if (isset($host_table[$key]['host'])) {
        $new_uri = $new_uri->withHost($host_table[$key]['host']);
    }
    if (isset($host_table[$key]['port'])) {
        $new_uri = $new_uri->withPort($host_table[$key]['port']);
    }
    if (isset($host_table[$key]['scheme'])) {
        $new_uri = $new_uri->withScheme($host_table[$key]['scheme']);
    }
}

$client = new HttpClient;
$response = $client->send($request->withUri($new_uri), [
    'http_errors' => false,
]);

foreach ($response->getHeaders() as $key => $values) {
    foreach ($values as $value) {
        header("{$key}:{$value}");
    }
}

echo $response->getBody();
