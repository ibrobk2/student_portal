<!doctype html>
<html lang="en">

<head>
  <title>RETRIEVE INVOICE</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="assets/sweetalert2/dist/sweetalert2.all.js"></script>

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="assets/sweetalert2/dist/sweetalert2.all.js"></script>

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
  <div class="modal-content" >
                        <div class="text-center">
                            <h2 class="modal-title font-weight-bold">RETRIEVE INVOICE</h2>
                        </div>
                        <div class="mx-3 justify-content-center" style="margin:0 500px" >
                        <form action="retrieve_receipt.php">
                            <div class="md-form mb-5">
                                <label data-error="wrong" data-success="right" for="jamb">Enter Email</label>
                                <input type="text" name="input" required="required" class="form-control validate" >
                            </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button name="retrieveInvoice" class="btn btn-info">Submit <i class="fa fa-paper-plane-o ml-1"></i>
                            </button>&nbsp;
                            <a href="./student_dashboard.php" type="button" class="btn btn-danger" >Close</a>
                        </div>
                        </form>
                    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>

<?php
$conn = mysqli_connect("localhost", "root", "", "student_portal");


if(isset($_GET['retrieveInvoice'])){
 $input =  $_GET['input'];
  $sql = "SELECT * FROM transactions WHERE email = '$input'";
  $result = mysqli_query($conn, $sql);

  if(mysqli_num_rows($result)>0){
    $ref = mysqli_fetch_assoc($result)['ref'];
    header("Location: receipt.php?ref=$ref");
  }else{
    echo "<script>
                    swal.fire('Student Not Found!', 'Failed to Retrieve Invoice/Receipt', 'error')
                    .then(function(result){if(result){window.location = './retrieve_receipt.php'}});
            </script>";
  }
}


?>