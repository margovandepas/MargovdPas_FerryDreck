<?php

$conn = new mysqli("localhost", "margo_ajax", "hoi123", "margo_ajax");
$result = $conn->query("SELECT naam FROM familie WHERE naam LIKE '{$_GET["naam"]}%';");

while ($row = $result->fetch_assoc()) {
    echo $row["naam"] . "<br>";
}
?>