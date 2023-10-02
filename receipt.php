<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<?php 

// include "includes/server.php";
$conn = mysqli_connect("localhost", "root", "", "student_portal");

if(isset($_GET['ref'])){
    $ref = $_GET['ref'];

    $sql = "SELECT * FROM transactions WHERE ref='$ref'";
    $res = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($res);

    // Customer Details
    $studentName = $data['full_name'];
    $regNo = $data['reg_number'];
    $email = $data['email'];
    $payment_category = $data['payment_category'];
    $rrr = $data['rrr'];
    $amount = $data['amount'];

    

    // Other Details
    $date = substr($data['created_on'],0,10);


    
    

}

?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">AL-QALAM UNIVERSITY, KATSINA</h4>
                        <h3 class="text-center" style="font-family: serif; color: #777;">Payment Receipt/Invoice</h3>
                    </div>
                    <div class="card-body">
                        <h5 class="text-center"><u>Customer Details</u></h5>
                        <h6>Student Name:&nbsp;&nbsp;<?=$studentName; ?></h6>
                        <h6>Registration Number:&nbsp;&nbsp;<?=$regNo; ?></h6>
                        <h6>Email Address:&nbsp;&nbsp;<?=$email; ?></h6>
                        <hr>
                        <h5 class="text-center"><u>Transaction Details</u></h5>
                        <div class="trx" style="text-align: center;">
                            <h6>Payment Category:&nbsp;&nbsp;<?=$payment_category; ?></h6>
                            <h6>Transaction ID:&nbsp;&nbsp;<?=$ref; ?></h6>
                            <h6>Amount:&nbsp;&nbsp;&#8358;<?= number_format($amount); ?></h6>
                            <h6 >Date:&nbsp;&nbsp;<?=$date; ?></h6>
                        </div>
                  
                       
                       
                    </div>
                </div>
                <h6 class="text-center mt-1">Thanks For Your Patronage.</h6>
                <button type="button" class="btn btn-primary mt-3" onclick="printer()">Print</button>
                <a class="btn btn-success mt-3" href="./student_dashboard.php">Back to Dashboard</a>

            </div>
        </div>
    </div>
    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function printer(){
            document.querySelector('.btn-primary').style.visibility = 'hidden';
            document.querySelector('.btn-success').style.visibility = 'hidden';
            print();
            document.querySelector('.btn-primary').style.visibility = 'visible';
            document.querySelector('.btn-success').style.visibility = 'visible';
            

        }
    </script>
</body>
</html>
