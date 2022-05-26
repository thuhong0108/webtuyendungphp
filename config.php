<?php
include 'database.php';

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'webnhansu';

$db = new database($dbhost, $dbuser, $dbpass, $dbname);

session_start();