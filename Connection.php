<?php
    $host = 'localhost';
    $user = 'root';
    $pass = 'vpmke7';
    $name = 'final_website';

    $conn = mysqli_connect($host, $user, $pass, $name);

    if(mysqli_connect_error()){
        echo "The error of the connection is: ".mysqli_connect_error();
    }
