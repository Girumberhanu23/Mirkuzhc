<?php
 $ServerName= "127.0.0.1";
 $UserName="root";
 $Password="";
 try{
    $conn= new pdo("mysql:host=$ServerName; dbname=mydatabase", $UserName, $Password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
    echo "Connected Successfully";
    $abc="Create Database Mirkuz";
    $conn->exec($abc);
    echo "DB created Successfully";
} catch (PDOException $pe){
    echo "Connection Failed:". $pe->getMessage();
    $conn=null;
}
