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
$tbl="Create table book(Name varchar(50), Phone varchar(30) primary key, Email varchar(50), Date varchar(30), Subcity varchar(50), City varchar(50), House int(3), Passport varchar(9), Service varchar(100))";
$conn->exec($tbl);
echo "Table Created Successfully";
?>