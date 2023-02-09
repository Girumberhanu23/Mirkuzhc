<?php
try{
  require_once ('../conn.php');
$check="SELECT * FROM book";
}catch(Exception $e){
echo $e->getMessage();
}
foreach($conn->query($check) as $row)
{
  echo "<h3><br>".$row['name']."</h3>";
 echo "<br>".$row['phone'];
echo "<br>".$row['email'];
echo"<br>".$row['date'];
echo"<br>".$row['subcity'];
echo"<br>".$row['city'];
echo"<br>".$row['house'];
echo"<br>".$row['postal'];
}
?>