<?php
require_once('lib/Covid.php');

$ncovi = new Covid();
$result = $ncovi->get();

// Option json decode (Format default: json)
// $result = $ncovi->decode(true);

print_r($result);
