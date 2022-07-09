<?php

include './conn.php';


$sql = "INSERT INTO posts (heading, description, author)
VALUES ('COGM2022', 'welcome to new CBF ', 'eric ngando')";

if ($conn->query($sql)) {
  echo "New record created successfully";
} else {
  echo "failed to add new record";
}
// $conn->close();


