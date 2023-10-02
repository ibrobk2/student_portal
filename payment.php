<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Payment Form</title>
    <script src="assets/sweetalert2/dist/sweetalert2.all.js"></script>

    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
    <!-- Add custom CSS for styling -->
    <style>
        body {
            background-color: #f0f0f0;
        }
        .payment-container {
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
            <div class="col-md-6 payment-container">
                <h2 class="form-header">Student Payment</h2>
                <form action="payment.php" method="post">
                    <div class="form-group">
                        <label for="studentName">Student Name</label>
                        <input type="text" class="form-control" name="studentName" placeholder="Enter student's name" required>
                    </div> 
                      <div class="form-group">
                        <label for="appNo">Admission Number/App No./RRR</label>
                        <input type="text" class="form-control" name="regNo" placeholder="Enter student's Registration No/ App No" required>
                    </div> 
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter student's email" required>
                    </div>
                    <div class="form-group">
                        <label for="paymentCategory">Payment Category</label>
                        <select class="form-control form-select" name="paymentCategory" required>
                            <option value="" disabled selected>Select payment category</option>
                            <option value="Application Fee">Application Fee</option>
                            <option value="School Fees">School Fees</option>
                            <option value="Hostel">Hostel</option>
                            <option value="ID Card Replacement">ID Card Replacement</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>   
                    <div class="form-group">
                        <label for="session">Session</label>
                        <select class="form-control form-select" name="session" required>
                            <option value="" disabled selected>Select Session</option>
                            <option value="2023/2024">2023/2024</option>
                            <option value="2022/2023">2022/2023</option>
                            <option value="2021/2022">2021/2022</option>
                            <option value="2020/2021">2020/2021</option>
                            <option value="2019/2020">2019/2020</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="amount">Amount</label>
                        <input type="number" class="form-control" name="amount" placeholder="Enter payment amount" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="pay_btn">Make Payment</button>
                    <a href="./student_dashboard.php" class="btn btn-danger btn-block">Close</a>
                </form>
            </div>
        </div>
    </div>

    <!-- Add Bootstrap JS and jQuery scripts (required for Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>

    <?php
    session_start();
    include("includes/server.php");

    if(isset($_POST['pay_btn'])){
        // variables declarations
        $student_name = $_POST['studentName'];
        $reg_no = $_POST['regNo'];
        if(isset($_SESSION['appNo'])){

            $app_no = $_SESSION['appNo'];
            $reg_no = $app_no;
        }else{
            $app_no = "";
        }
        $email = $_POST['email'];
        $payment_category = $_POST['paymentCategory'];
        $session = $_POST['session'];
        $amount = $_POST['amount'];
        $ref = substr((time()*rand()),1,6);

        $sql = "INSERT INTO transactions (`full_name`, `reg_number`, `email`, `payment_category`, `app_no`, `amount`, `rrr`, `ref`, `session`) VALUES ('$student_name', '$reg_no', '$email', '$payment_category', '$app_no', '$amount', '$app_no', '$ref', '$session')";
        $result = mysqli_query($conn, $sql);

        if($result){
            echo "<script>
                    swal.fire('Done!', 'Payment Made Successfully..', 'success')
                    .then(function(result){if(result){window.location = './receipt.php?ref={$ref}'}});
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
