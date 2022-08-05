<?php

$user = 'username';
$password = 'password';
$host = 'localhost';
$dbase = 'dbname';
$table = 'newsletter';

$dbc = mysqli_connect($host, $user, $password, $dbase)
    or die("Unable to get connection");



?>