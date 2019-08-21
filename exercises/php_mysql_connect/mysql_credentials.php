<?php

$conn = mysqli_connect("localhost","root","root","c619db","3306");
if ($conn){
    print_r($conn);
    print('<br>');
    print('Success: A proper connection to MySQL was made!');
} else {
    print_r('Connect Error: ' . mysqli_connect_error());
}
   
?>