<?php

session_start();
$host = "host = john.db.elephantsql.com";
$port = "port = 5432";
$dbname = "dbname = faqoanct";
$username = "user = faqoanct";
$password = "password = g3TAi9XQDpgYe74NXMuhoZUsFkZfA0L1";

$connection = pg_connect("$host $port $dbname $username $password");
if ($connection) {
    echo "Connected";
} else {
    echo "Cant Connect";
}

?>
