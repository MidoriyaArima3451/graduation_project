<?php 
$servername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="courseregist";

$conn=mysqli_connect($servername,$dbusername,$dbpassword,$dbname);
if (!$conn)
{
    die("connection failed: ".mysqli_connect_error());
}