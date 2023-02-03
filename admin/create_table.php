<?php
$ServerName= "127.0.0.1";
$UserName="root";
$Password="";
try{
   $conn= new pdo("mysql:host=$ServerName; dbname=mirkuz", $UserName, $Password);
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
} catch (PDOException $pe){
    echo "Connection Failed:". $pe->getMessage();
    $conn=null;
}
$tbl="Create table book(Name varchar(50), Phone varchar(30), Email varchar(50) primary key, Date varchar(30), Subcity varchar(50), City varchar(50), House int(3), Postal int(5))";
$conn->exec($tbl);
echo "Table Created Successfully";
?>