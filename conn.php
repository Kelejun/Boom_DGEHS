<?php
$link = new mysqli('dbhost','dbusername','password','dbname');
mysqli_set_charset($link, 'utf8mb4');
if ($link->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
$ranking = "kano_rank";//排行榜表名