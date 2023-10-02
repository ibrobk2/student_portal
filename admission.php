<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Letter</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .admission-letter {
            max-width: 900px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        .header {
            text-align: center;
            background-color: rgba(20,150,50,0.5);
            color: #fff;
            padding: 5px;
            border-radius: 5px;
        }
        .content {
            padding: 20px;
            text-align: left;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<?php
include "includes/server.php";
if(isset($_GET['ref'])){
    $email = $_GET['ref'];


$sql = "SELECT * FROM applications WHERE email = '$email'";
$result = mysqli_query($conn, $sql);



if($result){
  $data = mysqli_fetch_assoc($result);

  // Student Details
  $studentName = $data['full_name'];
  $program = $data['program'];
  $email = $data['email'];
  $admission_number = $data['app_no'];

}

}


?>
    <div class="admission-letter">
        <div class="img justify-content-center text-center">

            <img src="assets/images/logo.png" alt="" >
        </div>
        <h1 class="text-center text-success"> Al-Qalam University, Katsina</h1>
        <div class="header">
            <h3>Admission Letter</h3>
        </div>
        <div class="content">
            <p><strong>Session:</strong> 2023/2024</p>
            <p><strong>Student Name:</strong><?=$studentName; ?></p>
            <p><strong>Admission Number:</strong> <?=$admission_number; ?></p>
            <p><strong>Program of Study:</strong> <?=$program; ?></p>
            <p style="text-align: justify;">Congratulations! We are pleased to inform you that you have been admitted to Al-Qalam University for the 2023/2024 academic session.</p>
            <p style="text-align: justify;">We look forward to welcoming you to our institution and assisting you in your academic journey.</p>
            <p style="text-align: justify;">If you have any questions or need further information, please feel free to contact our admissions office.</p>
            <p style="text-align: justify;">Best regards,</p>
            <p style="text-align: justify;"><b>Mal. Halliru Sani</b><br>Admissions Office<br>Al-Qalam University</p>
        </div>
        <div class="footer">
            <p>Website: www.auk.edu.ng<br>Email: admissions@auk.edu.ng<br>Phone: +234 8165929616</p>
        </div>
    </div>

    <button  onclick="printer()" id="btn" class="btn btn-primary form-control mb-3" style="margin-top: -10px; margin-left: 350px; width:600px;">Print</button>
    <center><a href="./student_dashboard.php" type="button" class="btn btn-danger" id="btn2">Close</a></center>


    <script>
        function printer(){
          
            var btn = document.getElementById('btn');
            var btn2 = document.getElementById('btn2');

            btn.style.visibility = 'hidden';
            btn2.style.visibility = 'hidden';
            print();
            btn.style.visibility = 'visible';
            btn2.style.visibility = 'visible';
        }
    </script>
</body>
</html>
