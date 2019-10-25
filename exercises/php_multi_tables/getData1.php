<?php
  require_once('functions.php');
  require_once('db_connection.php');
  set_exception_handler("error_handler");
  startUp();
  if(!$conn){
    throw new Exception(mysqli_connect_error($conn));
  };
  $query = "SELECT * FROM `multitable_json`";
  $result = mysqli_query($conn, $query);
  if (!$result){
    throw new Exception(mysqli_error($result));
  };
  $output = [];
  while ($row = mysqli_fetch_assoc( $result )){
    $row["releaseData"] = json_decode($row["releaseData"]);
    array_push($output,$row);
  }
  $json_output = json_encode( $output );
  print($json_output);
?>