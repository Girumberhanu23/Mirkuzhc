<?php
$dbServername="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="mirkuz";

try{
    $conn =new PDO("mysql:host=$dbServername;dbname=$dbName",$dbUsername, $dbPassword);
    $conn->setAttribute(PDO:: ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//    echo"Connected Succesfully! ";
}
catch(PDOException $pe){
    echo"Connection failed".$pe->getMessage();
    $conn=null;
}

?>



