<?php

$db_server = 'rdbms.strato.de';
$db_user = 'dbu1275561';
$db_password = 'jessevandriel';
$db_name = 'dbs12125995';

$conn = mysqli_connect($db_server, $db_user, $db_password, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}