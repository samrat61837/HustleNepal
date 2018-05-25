<?php
$server = SERVER;
$dbname = DBNAME;
try {
    $conn = new PDO("mysql:host=$server;dbname=$dbname", DBUSER, DBPASSWORD);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    //echo "Connection Successfull";
    
    }
	catch(PDOException $e)
    {
    echo  $e->getMessage();
    }