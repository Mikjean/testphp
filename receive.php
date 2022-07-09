<?php
$pdo = require_once './conn.php';
   
if( $_POST["heading"] && $_POST["description"] && $_POST["author"] ) {
     
      
$heading = $_POST["heading"];
$description = $_POST["description"];
$author = $_POST["author"];

$sql = "INSERT INTO posts (heading, description, author)
VALUES (:heading, :description, :author)";

$statement = $pdo->prepare($sql);

$statement->execute([
	':heading' => $heading,
	':description' => $description,
	':author' => $author
]);

      echo "Welcome ". $_POST['heading']. "<br />";
      echo "You are ". $_POST['description']. " years old.";
      echo "You are ". $_POST['author']. " years old.";
      
      exit();
   }
?>

