<?php

$name = $_POST["name"];
$pass = $_POST["pass"];



$con = new mysqli('localhost','root','','db');
if($con->connect_error){
    die('Connection Failed : '.$con->connection_error);
}else
{
    $com = $con->prepare("insert into tbl values('$name','$pass')");
    $com->execute();
echo "<script>alert('Done!')</script>";
$com->close();
$con->close();
header("Location: index.html");
}

?>