<?php
$servername = "sql309.infinityfree.com";
$username = "if0_35742290";
$pass = "IKOfcE68l7h0VpQ";
$dbname = "if0_35742290_onlinecoaching";

$conn = new mysqli($servername, $username, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


