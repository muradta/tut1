<?php

$name = $_POST["name"];
$pass = $_POST["pass"];



$con = new mysqli('localhost','adraeventscom_admin','Axmin@9000%','adraeventscom_adraeventscom_wewb_db');
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