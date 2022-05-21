<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'sekolah_pjm';

$connect = mysqli_connect($host, $user, $pass, $db);

if (!$connect) die;
