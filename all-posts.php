<?php
$pdo = require_once './conn.php';
$stmt = $pdo->prepare("select * from posts");
$result = $stmt->execute();
$results =$stmt->fetchAll(PDO::FETCH_OBJ);
// var_dump($results[0]->author);
// var_dump( date_format($results[0]->author, 'g:i A'));
;
?>

    <html >
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    </head>
    
   <body>
      <?php include './menu.php';?>
      <div>
        <ul>
            <?php
            foreach($results as $result){
                echo  '<h1 class="list-group-item">'.$result->heading."</h1>";
                echo  '<img src="images/'.$result->img.'" style="width:100px;">'.'<br>';
                echo  "<small>".$result->author."</small>";
                echo  "<i>".date('y-m-d h:i a',strtotime($result->created_at))."</i>"."<br>"; ;
                echo  '<a href="read-single?id='.$result->id.'">'.'read more'.'</a>';
                // '<a href="'.$_brand->url.'">'.'read more'.'</a>';
            }
            ?>
        </ul>

        </div>
      <?php include './footer.php';?>      
   </body>
</html>