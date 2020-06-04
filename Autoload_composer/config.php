<?php
$dbName = 'test';
$dbHost = 'localhost';
$dbUser = 'sisadmin';
$dbPass = 's1sadm1n';

//("pgsql:dbname="$";host=" $, $, $);
$pdo = new PDO("pgsql:dbname=".$dbName.";host=".$dbHost, $dbUser, $dbPass);

$db_name = 'test';
$db_host = 'localhost';
$db_user = 'sisadmin';
$db_pass = 's1sadm1n';
