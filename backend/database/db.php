<?php

    define('servername', 'localhost');
    define('username', 'root');
    define('password', '');
    define('dbname', 'formulario');

    $conn = new mysqli(servername, username, password, dbname);

    if ($conn->connect_error){
        die('Conexão falhou: ' . $conn->connect_error);
    }
