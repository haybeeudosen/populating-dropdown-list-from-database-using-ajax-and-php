<?php
include "conn.php";


//Fetch continents
$sql = "SELECT * from continents";
$stmt = $conn->prepare($sql); 
$stmt->execute();
$result = $stmt->get_result();



?>