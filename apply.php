<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Application Form</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css"> -->
    <script src="assets/sweetalert2/dist/sweetalert2.all.js"></script>

    <!-- Add custom CSS for styling -->
    <style>
        body {
            background-color: #f0f0f0;
        }
        .admission-container {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            margin-top: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }
        .form-header {
            text-align: center;
            padding-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 admission-container">
                <h2 class="form-header">Admission Application Form</h2>
                <form action="apply.php" method="post">
                    <div class="form-group">
                        <label for="fullName">Full Name</label>
                        <input type="text" class="form-control" name="full_name" placeholder="Enter your full name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter your email address" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="tel" class="form-control" name="phone" placeholder="Enter your phone number" required>
                    </div>
                    <div class="form-group">
                        <label for="program">Program of Interest</label>
                        <!-- <input type="text" class="form-control" id="program" placeholder="Enter the program you are interested in" required> -->
                        <select name="program" id="" class="form-select form-control">
                            <option value="Select Program of Interest">Select Program of Interest</option>
                            <option value="Computer Science">Computer Science</option>
                            <option value="English Language">English Language</option>
                            <option value="Biological Science">Biological Science</option>
                            <option value="Industrial Chemistry">Industrial Chemistry</option>
                            <option value="Biochemistry">Biochemistry</option>
                            <option value="Physics">Physics</option>
                            <option value="Geography">Geography</option>
                            <option value="Islamic Studies">Islamic Studies</option>
                            <option value="Economics">Economics</option>
                            <option value="Mathematics">Mathematics</option>
                            <option value="Arabic Studies">Arabic Studies</option>
                            <option value="Hausa">Hausa</option>
                            <option value="Sociology">Sociology</option>
                            <option value="Software Engineering">Software Engineering</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">Home Address</label>
                        <textarea class="form-control" id="message" rows="4" placeholder="Enter home address" name="address"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="apply" >Submit Application</button>
                    <a href="./student_dashboard.php" type="button" class="btn btn-danger" >Close</a>

                </form>
            </div>
        </div>
        
    </div>

    <!-- Add Bootstrap JS and jQuery scripts (required for Bootstrap) -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>



    <?php 

    // include("includes/server.php");
    $conn = mysqli_connect("localhost", "root", "", "student_portal");



    if(isset($_POST['apply'])){
         $full_name = $_POST['full_name'];
         $email = $_POST['email'];
         $phone = $_POST['phone'];
         $program = $_POST['program'];
         $address = $_POST['address'];
         $app_no = substr((time()*rand()),1,6);

        $sql = "INSERT INTO applications (`full_name`, `email`, `phone`, `program`, `address`, `app_no`) VALUES ('$full_name', '$email', '$phone', '$program', '$address', '$app_no')";
        $result = mysqli_query($conn, $sql);
        
      

        if($result){
            session_start();
            $_SESSION['appNo'] = $app_no;
            echo "<script>
                    swal.fire('Done!', 'Success, Your App No. is {$app_no}, proceed with payment now.', 'success')
                    .then(function(result){if(result){window.location = './payment.php'}});
                </script>";
        }else{
            echo "<script>
                    swal.fire('Something Wrong!', 'Application Failed', 'error')
                    .then(function(result){if(result){window.location = './apply.php'}});
            </script>";
        }
    }


    ?>

</body>
</html>
