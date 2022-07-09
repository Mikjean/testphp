
<?php
$pdo = require_once './conn.php';
   
$sql = "UPDATE posts set heading=:heading, description=:description, author=:author where id=:id";

$statement = $pdo->prepare($sql);
$statement->bindParam(':heading',$_REQUEST['heading']);
$statement->bindParam(':description',$_REQUEST['description']);
$statement->bindParam(':author',$_REQUEST['author']);
$statement->bindParam(':id',$_REQUEST['id']);

if($statement->execute()){
    
    echo "Welcome post updated successfully";
    
    exit();
};


   
?>

