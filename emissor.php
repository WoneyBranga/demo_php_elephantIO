<?php

include('vendor/autoload.php');

use ElephantIO\Client;
use ElephantIO\Engine\SocketIO\Version2X;

$version = new Version2X('http://127.0.0.1:3001');

$client = new Client($version);

$dataSet = [
    [ "Tiger Nixon", "System Architect", "Edinburgh", "5421", "2011/04/25", "$320,800" ],
    [ "Garrett Winters", "Accountant", "Tokyo", "8422", "2011/07/25", "$170,750" ],
    [ "Ashton Cox", "Junior Technical Author", "San Francisco", "1562", "2009/01/12", "$86,000" ],
];

$client->initialize();
$client->emit('fila1', $dataSet );
$client->close();

$client->initialize();
$client->emit('fila2', $dataSet );
$client->close();
