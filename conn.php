<?php

$host = 'localhost';
$user = 'root';
$pswd = ''; # sepasang single quotes
$dbname = 'dfp50193_php_crud';

$conn = new mysqli($host, $user, $pswd, $dbname);
session_start();
