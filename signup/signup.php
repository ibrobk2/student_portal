<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script src="../assets/sweetalert2/dist/sweetalert2.all.js"></script>
</head>
<body>

<?php

// include("../includes/server.php");
$conn = mysqli_connect("localhost", "root", "", "student_portal");

if(isset($_POST['signup'])){
    // Variable declarations
    $fullName = $_POST['full_name'];
    // $middleName = $_POST['middleName'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $reg_no = substr((time()*rand()),0,6);
    // $confirmPassword = $_POST['confirmPassword'];

    $sql = "INSERT INTO student (`reg_number`, `full_name`, `password`, `username`, `email`, `phone`) VALUES('$reg_no', '$fullName', '$password', '$username', '$email', '$phone')";
    $res = mysqli_query($conn, $sql);
    if($res){
        $status = "Done!";
       $output = "Account Created Successfully..";
       $msg = 'success';
       echo "<script>
       swal.fire('{$status}', '{$output}', '{$msg}')
       .then(function(result){if(result){window.location = '../'}});
   </script>";
    }else{
        $status = "Error!";
        $output = "Something Went Wrong..";
        $msg = 'error';
        echo "<script>
        swal.fire('{$status}', '{$output}', '{$msg}')
        .then(function(result){if(result){window.location = '../signup'}});
    </script>";
    }

  
}

?>
    
</body>
</html>
