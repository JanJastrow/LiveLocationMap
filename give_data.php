<?php
// config
$password = "Fucker!";

// Getting data
$lat = $_POST["latitude"];
$lon = $_POST["longitude"];
$acc = $_POST["accuracy"];
$battery = $_POST["battery"];
$secret = $_POST["secret"];

// check the password
if ($secret != $password) {
    die();
}

// Write to file
if ($lat && $lon && $acc) {
    $fcur = fopen("position.cur", "w");

    $time = time();
    $out = "$time:$lat:$lon:$acc:$battery\n";

    fputs($fcur, $out);

    fclose($fcur);
}
?>