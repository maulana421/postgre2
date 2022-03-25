<?php

session_start();
$host = "host = john.db.elephantsql.com";
$port = "port = 5432";
$dbname = "dbname = ypovawlw";
$username = "user = ypovawlw";
$password = "password = 5awMp3gVFpO8qrWix7O__dazUTlq1czu";

$connection = pg_connect("$host $port $dbname $username $password");
if ($connection) {
    echo "Connected";
} else {
    echo "Cant Connect";
}

?>
