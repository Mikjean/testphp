<?php
include './conn.php';

//read all posts
$stmt = $conn->prepare("delete from posts  where id=3");
$result = $stmt->execute();
$results =' news deleted ';
$json = json_encode(['response' => $results]);
echo $json;