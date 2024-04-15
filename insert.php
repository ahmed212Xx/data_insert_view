<?php
include 'connection.php';
if($connection){
    $name = $_POST['name'];
    $pass = $_POST['password'];
    $insert = "INSERT INTO `std` (`id`, `name`, `password`) VALUES (NULL, '$name', '$pass')"; 
    $result=mysqli_query($connection, $insert);
    if($result){
        echo "<script>alert('DATA SUBMITTED SUCCESSFULLY')</script>";
        // header("location:insert.html");
    }
    
}
include 'insert.html';

?>
