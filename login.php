<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="assets/sweetalert2/dist/sweetalert2.all.js"></script>

</head>
<body>
<?php
include("includes/server.php");

if(isset($_POST['login'])){
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST['password'];


    $sql = "SELECT * FROM student WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)>0){
        session_start();
        $_SESSION['username'] = $username;
        echo "<script>
        swal.fire('Logged In', 'Login Successful...', 'success')
        .then(function(result){if(result){window.location = './student_dashboard.php'}});
    </script>";
    }else{
        echo "<script>
        swal.fire('Sorry', 'User not found!', 'error')
        .then(function(result){if(result){window.location = './'}});
    </script>";
    }
}
?>
</body>
</html>
