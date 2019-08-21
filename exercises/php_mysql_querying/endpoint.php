<?php
require_once('mysql_credentials.php');

$query = "SELECT * FROM `mysqlQueryTest` ";

$result = $conn->query($query);
$output = [];


if(mysqli_num_rows($result)){
  print("Truthy");
  
} else 
    print("No data available");

while($row = mysqli_fetch_assoc($result)){
    $output[] = $row;
};
    print(json_encode( $output));

?>