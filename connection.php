<?php
    $server='127.0.0.1:3306';
    $username='u898667946_RahulKumar';
    $password='Trading@123!';
    $database='u898667946_PaymentInfo';
    
    $conn=mysqli_connect($server, $username,$password,$database);
    if(!$conn){
        die('Error: '.msqli_connect_error());
    }
?>