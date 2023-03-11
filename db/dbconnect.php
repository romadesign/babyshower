<?php
// $server = "sql212.epizy.com";
// $username = "epiz_33706787";
// $password = "2kHT5bcJqj";
// $database = "epiz_33706787_baby";

// $conn = mysqli_connect($server, $username, $password, $database);
// if (!$conn){
//     die("Error". mysqli_connect_error());
// }

$server = "localhost";
$username = "root";
$password = "";
$database = "baby";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
    die("Error". mysqli_connect_error());
}

?>