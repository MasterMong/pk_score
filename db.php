<?php
    $env = parse_ini_file(getenv('DOCUMENT_ROOT') . '/.env');
    $host = $env['host'];
    $username = $env['username'];
    $password = $env['password'];
    $database = $env['database'];
    $port = $env['port'];

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
    