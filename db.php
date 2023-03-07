<?php
    $host = '206.189.47.16';
    $username = 'pk_score';
    $password = 'sEY5p3T8';
    $database = 'pk_score';
    $port = 3306;

    $mysql = mysqli_connect($host, $username, $password, $database, $port);
    $mysql->set_charset("utf8");
    if($mysql == false) {
        die('ไม่สามารถเชื่อมต่อกับฐานข้อมูล');
    }
    
    session_start();

    function query($sql) {
        $mysql = $GLOBALS['mysql'];
        $result = mysqli_query($mysql, $sql);
        if ($result === false) {
            die('Query failed: '. mysqli_error($mysql));
        }
        return $result;
    }
    