<?php
  header("Content-Type: application/json; charset=UTF-8");
  $obj = json_decode($_GET["x"], false);
  
  $conn = new mysqli("your_server","your_server_username","your_server_password","your_server_database_name");
  $result = $conn->query("SELECT name FROM ".$obj->$table." LIMIT ".$obj->$limit);
  $outp = array();
  $outp = $result->fetch_all(MYSQLI_ASSOC);

  echo "myFunc(".json_encode($outp).")";


?>
