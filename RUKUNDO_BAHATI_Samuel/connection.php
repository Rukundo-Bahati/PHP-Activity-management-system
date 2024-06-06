<?php

$host = 'localhost';
$user = 'root';
$pwd = '';
$db = 'log_db';

$conn = new mysqli($host, $user, $pwd, $db);

if (!$conn) {
  die("Connection Failed");
}