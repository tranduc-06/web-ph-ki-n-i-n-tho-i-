<?php
    $connect = new mysqli("localhost","root","","test");
    if($connect->connect_errno)
    {
        echo('kết nối lỗi') . $connect->connect_errno;
        exit();
    }
?>
