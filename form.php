

<html>
   <body>
      <?php include './menu.php';?>
      <form action = "receive.php " method = "POST">
         heading: <input type = "text" name = "heading" />
         description: <input type = "text" name = "description" />
         author: <input type = "text" name = "author" />
         <input type = "submit" />
      </form>
      <?php include './footer.php';?>

      
   </body>
</html>