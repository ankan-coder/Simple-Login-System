<?php
$server = "localhost";
$uname = "root"; //your username here
$pword = "";// your password here
$dbname="simpleloginusers";

$conn = mysqli_connect($server, $uname, $pword, $dbname);

// else{
//     echo "Connection successfull";
// }