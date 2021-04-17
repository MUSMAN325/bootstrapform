<?php
include 'config.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];
    
    
    // insert data
    mysqli_query($con ,"INSERT INTO `tblform`(`Name`, `Email`, `Number`, `Password`) 
                    VALUES ('$name', '$email','$number', 'Password')");
                    header('location:login.php');
    
    
}
?>