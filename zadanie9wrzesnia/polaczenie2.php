<?php
$plik_json = 'dane.json';

$json_data = file_get_contents($plik_json);

$dane = json_decode($json_data, true);

print_r($dane);
?>