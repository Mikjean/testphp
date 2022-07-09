<?php
$pdo = require_once './conn.php';

//read all posts

$stmt = $pdo->prepare("select * from posts where id=:id");
$stmt->bindparam(':id', $_REQUEST['id']);
$result = $stmt->execute();
$results =$stmt->fetchAll(PDO::FETCH_OBJ);
// $json = json_encode($results);
// echo $json;
// var_dump($results[0]->author);

?>

<html >
    
    
   <body>
      <?php include './menu.php';?>
      <div>
        <ul>
            <?php
            
                echo  "<h1>".$results[0]->heading."</h1>";
                echo  '<img src="images/'.$results[0]->img.'" style="width:150px;">'.'<br>';
                echo  "<small>".$results[0]->author."</small>";
                echo  "<i>".$results[0]->created_at."</i>";
                // echo  '<a href="read-single?id='.$results[0]->id.'">'.'read more'.'</a>';
                // '<a href="'.$_brand->url.'">'.'read more'.'</a>';
            
            ?>
        </ul>

        </div>
      <?php include './footer.php';?>      
   </body>
</html>