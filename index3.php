<?php

header("Access-Control-Allow-Origin: *");

date_default_timezone_set('Asia/Kolkata');

// $currentDateTime = new DateTime('now');

// $currentTimeFormatted = $currentDateTime->format('H:i:s');

// echo $currentTimeFormatted;

$something = date('H:i:s');

echo $something;
?>
