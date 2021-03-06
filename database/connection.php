<?php
// Database PDO
$db_type = 'mysql';
$db_name = 'demo';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$dsn = "$db_type:dbname=$db_name;host=$db_host";

try {
    $dbh = new PDO($dsn, $db_user, $db_pass);
    $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (Exception $e) {
    echo $e->getMessage();
}