<?php

require "vendor/autoload.php";
use Bluerhinos\phpMQTT;

require("DB.php");

$server     = 'x2.revolusi-it.com';
$port       = 1883;
$username   = 'usm';
$password   = 'usmjaya001';
$client_id  = 'client-G.231.22.0017';

$mqtt = new phpMQTT($server, $port, $client_id);

if (!$mqtt->connect(true, NULL, $username, $password)) {
    exit(1);
}

$temperature =  $mqtt->subscribeAndWaitForMessage('g231220017/temperature', 0);
$humidity =  $mqtt->subscribeAndWaitForMessage('g231220017/humidity', 0);
$control =  $mqtt->subscribeAndWaitForMessage('g231220017/control', 0);

$mqtt->close();

// $DB = new DB();
// $db_message = $DB->insert($temperature, $humidity);
// $sensors_data = $DB->getSensorsData();

header('Content-Type: application/json');

$response = json_encode([
    "temperature" => $temperature,
    "humidity" => $humidity,
    "control" => json_decode($control),
    // "db_message" => $db_message,
    // "sensors_data" => $sensors_data
]);

echo $response;
