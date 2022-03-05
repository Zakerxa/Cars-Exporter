<?php

date_default_timezone_set("America/New_York");

include "config.php";

$db = new Database();
$pdo = $db->connection();

// Create Default Time
$diffWithGMT = 6 * 60 * 60 + 30 * 60; //converting time difference to seconds.
$time = gmdate("Y-m-d H:i:s", time() + $diffWithGMT);
$date = gmdate("Y-F-d", time() + $diffWithGMT);

// Escape Function
function escape($html){
    return htmlspecialchars($html, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
}