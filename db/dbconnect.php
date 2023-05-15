<?php
require_once('config.php');
$connect = mysqli_connect(host, username, password, dbname);
if ($connect) {
    mysqli_query($connect, "SET NAMES 'UTF8'");
} else
    echo "Kết nối thất bại!";
