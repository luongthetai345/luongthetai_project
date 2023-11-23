<?php
    $mysqli = mysqli_connect('localhost', 'root', 'Tai@02102003', 'php_ad');
    if(mysqli_connect_errno()){
        echo "Error connectiong to MySQL: ".mysqli_connect_error();
    }else{
        echo "Connected successfully";
    }
?>