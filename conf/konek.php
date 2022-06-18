<?php 

    // turn error reporting off
    error_reporting(0);

    // session start
    session_start();

    // db connection
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "db_crud";

    $kon = mysqli_connect($host, $user, $pass, $db);

    // const
    define('base_url', 'index.php');
?>