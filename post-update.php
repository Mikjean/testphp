<?php
$pdo = require_once './conn.php';
$stmt = $pdo->prepare("select * from posts where id=:id");
$stmt->bindParam(':id',$_GET['id']);
$stmt->execute();
$results =$stmt->fetchAll(PDO::FETCH_OBJ);
var_dump($results[0]->author);
?>

    <html >
    
   <body>
      <?php include './menu.php';?>
      <form action = "update-post.php " method = "PUT">
         heading: <input type = "text" value= <?php echo $results[0]->heading; ?> name = "heading"  />
         description: <input type = "text" value=<?php echo $results[0]->description ?> name ="description"  />
         author: <input type = "text" value= <?php echo $results[0]->author ?>  name = "author" />
         <input type = "text" value= <?php echo $results[0]->id ?>  name = "id" style="display:none;"/>
         <input type = "submit" />
      </form>
      <?php include './footer.php';?>      
   </body>
</html>