<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rsmgsys";

$con = mysqli_connect($servername,$username,$password,$dbname);

if($con)
{
    echo "Connection OK";
}
else
{
    echo "Connection Failed ".mysqli_connect_error();
}
?>