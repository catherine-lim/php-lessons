<?php

$conn = mysqli_connect('localhost','root','root','c619db',3306);

if(!$conn){
    printf("Connect failed: %s\n",mysqli_connect_error());
    exit();
}

?>