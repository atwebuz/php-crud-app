<?php
    $conn = new mysqli('localhost','root','','crudapp');
    if($conn){
        // echo 'connection success!';
    }else{
        die(mysqli_error($conn));
    }
?>