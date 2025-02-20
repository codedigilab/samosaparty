<?php
$i = 0;
$server="localhost";
$username="root";
$password="";


$conn = new mysqli($server,$username,$password);

if($conn)
{
  mysqli_select_db($conn,"samosaparty");
  echo("connection established");
}
?>