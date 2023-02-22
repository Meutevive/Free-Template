<?php
$username = "root";
$password = "root";
$pdo = new PDO("mysql:host=localhost;dbname=blog;charset=utf8", $username, $password, [PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION]);
