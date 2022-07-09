<?php
include './conn.php';

//read all posts
$stmt = $conn->prepare("select * from posts");
$result = $stmt->execute();
$results =$stmt->fetchAll(PDO::FETCH_OBJ);
$json = json_encode(['data' => $results]);
echo $json;