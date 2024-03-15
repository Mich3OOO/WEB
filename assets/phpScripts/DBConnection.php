<?php

$conn = new mysqli("localhost", "root", "" ,null, 3308);


$conn->select_db("test");

$sql = "SELECT * FROM `utilisateur`;";
$r = $conn->query($sql);

$conn->close();

echo json_encode($r->fetch_all());
?>