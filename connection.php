<?php

if(!isset($_SESSION)){
    session_start();
}

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $database = 'db-biodata';

    //membuat koneksi ke database
    $connection = mysqli_connect($host , $user , $pass, $database);

    
?>