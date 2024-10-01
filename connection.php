<?php
$servername = 'localhost';
$username = 'root';
$database = 'openuniversity_db';
$password = '';
    try{
        $conn = new PDO("mysql:host=$servername;dbname=$database", 'root', '');
        //echo "connected";

    }catch(PDOException $e){
        echo "Failed";
    }

?>