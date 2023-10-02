<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>Login::Student Portal - Al-Qalam University, Katsina</title>

    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.css">

    <!--[if lt IE 11]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content=""/>
    <meta name="keywords" content="">
    <meta name="author" content="FINAL YEAR STUDENT PROJECT"/>
    <link rel="shortcut icon" href="assets/images/logo.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/parsley/css/parsley.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/pace/pace-theme-center-atom.css">
    <style>
        body {
            background: url('assets/images/background.png');
            /* background-color: darkcyan; */
        }

        .swal-wide {
            width: 900px !important;
        }
    </style>
</head>
<body>

<div class="modal fade" id="checkadmission" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h2 class="modal-title font-weight-bold">Confirm Admission</h2>
            </div>
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                    <i class="fa fa-user prefix grey-text"></i>
                    <label data-error="wrong" data-success="right" for="jamb">JAMB Number:</label>
                    <input type="text" id="jamb" required="required" class="form-control validate">
                </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button id="send" class="btn btn-info">Submit <i class="fa fa-paper-plane-o ml-1"></i></button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="confirmpayment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h2 class="modal-title font-weight-bold">Confirm Payment</h2>
            </div>
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                    <i class="fa fa-user prefix grey-text"></i>
                    <label data-error="wrong" data-success="right" for="jamb">JAMB Number:</label>
                    <input type="text" id="jamb2" required="required" class="form-control validate">
                </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button id="send" class="btn btn-info">Submit <i class="fa fa-paper-plane-o ml-1"></i></button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="googleAuth" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-footer d-flex justify-content-center">
                <button id="send" class="btn btn-info">Submit <i class="fa fa-paper-plane-o ml-1"></i></button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="checkadmission2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h2 class="modal-title font-weight-bold">Check Admission</h2>
            </div>
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                    <i class="fa fa-user prefix grey-text"></i>
                    <label data-error="wrong" data-success="right" for="jamb">APP/JAMB NUMBER:</label>
                    <input type="text" id="jamb3" required="required" class="form-control validate">
                </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button id="send" class="btn btn-info">Submit <i class="fa fa-paper-plane-o ml-1"></i></button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="verifyPayment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h2 class="modal-title font-weight-bold">VERIFY PAYMENT</h2>
            </div>
            <div class="modal-body mx-3">
                <div class="md-form mb-5">
                    <i class="fa fa-user prefix grey-text"></i>
                    <label data-error="wrong" data-success="right" for="jamb">RRR:</label>
                    <input type="text" id="rrr" required="required" class="form-control validate">
                </div>

            </div>
            <div class="modal-footer d-flex justify-content-center">
                <button name="vp" class="btn btn-info">Submit <i class="fa fa-paper-plane-o ml-1"></i>
                </button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="other-payments" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h2 class="modal-title font-weight-bold">OTHER PAYMENTS</h2>
            </div>
            <div class="modal-body mx-3">
                <div class="md-form mb-1">
                    <label>Admission Number*:</label>
                    <input type="text"  required="required" class="form-control validate">
                </div>
                <div class="md-form mb-1">
                    <label>Payment Type*:</label>
                    <select name="serviceType" class="form-control">
                    <option></option>
                    <option value='11'>HOSTEL EXEMPTION Undergraduate</option>                </select>
               </div>
               <div class="md-form">
                    <label >Session*</label>
                    <select name="session" class="form-control" required>
                    <option></option>
                        <option >2022/2023</option><option >2021/2022</option><option >2020/2021</option><option >2019/2020</option><option >2018/2019</option><option >2017/2018</option><option >2016/2017</option><option >2015/2016</option><option >2014/2015</option><option >2013/2014</option>                    </select>
               </div>
               <div class="md-form mb-1">
                    <label>Amount*:</label>
                    <input name='amount' type="text" readonly  required="required" class="form-control validate">
                </div>

            </div>
            
            
            <div class="modal-footer d-flex justify-content-center">
                <button name="oi" class="btn btn-info">Generate <i class="fa fa-paper-plane-o ml-1"></i>
                </button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>




<div>
    <div class="row" style="min-height:100vh !important; margin-right:0 ">
        <div class='col-sm-12 col-lg-9 d-none d-xs-block d-sm-none d-md-none d-lg-block'>
            <div class="container pt-5" style="line-height:25px;font-size:16px">
                <h2 class="text-center text-success">WELCOME TO AL-QALAM STUDENT PORTAL</h2>
                <nav class="navbar navbar-light bg-light">
                    <form class="form-inline">
                        <a href='signup/' class="btn btn-outline-danger" 
                           type="button">
                            CREATE ACCOUNT</a>
                        <a href='#' class="btn btn-outline-danger" data-toggle="modal" data-target="#verifyPayment"
                           type="button">
                            VERIFY PAYMENT</a>
                        <a href='check_admission.php' class="btn btn-outline-danger" 
                           type="button">
                            CHECK ADMISSION</a>
                        <!--
                            <button class="btn btn-outline-danger" type="button">OTHER FEES PAYMENT</button>
    -->
    <a href='payment.php' class="btn btn-outline-danger" 
                           type="button">PAYMENTS</a>
                            <a href='retrieve_receipt.php' class="btn btn-outline-danger" 
                           type="button">
                            RETRIEVE INVOICE</a>
                        <button class="btn btn-outline-danger" type="button">CONTACT US</button>
                    </form>
                </nav>
                <div class='row'>
                    <div class='col-sm-8'>
                    Fresh student guidelines
                        <ol>
                            <li>Create account <a href="#" data-toggle="modal" data-target="#application"
                                                            class="ms-1">HERE</a></li>
                            <li>Generate Invoice for  Application Form and Screening fees</li>
                            <li>Pay the invoice generated</li>
                            <li>Login with your Remita Reference Number (RRR) as username and password</li>
                            <li>Create your profile and wait for admission</li>
                            <li>Check your admission status regularly until admitted</li>
                            <li>Come to the school for physical verification</li>
                            <li>Upon successful verification, an invoice will be generated</li>
                            <li>Pay the generated invoice to </li>
                            <!--<li>Verify your payment  <a href="#" data-toggle="modal" data-target="#verifyPayment"
                                                            class="ms-1">HERE</a>
                                to get your admission Number</li>-->
                            <li>Proceed to central registration</li>
                        </ol>
                        Returning student guidelines
                        <ol>
                            <li>Login with your admission number and password</li>
                            <li>Pay your school fees</li>
                            <li>Proceed to course registration</li>
                        </ol>
                    </div>
                    <div class='col-sm-4'>
                       Contacts for enquiries:
                        <ol> 
                             <li>Technical Issues:  08076820548</li>
                             <li>Profile issues:	08062335229</li>
                             <li>Payment issues:  08160062256</li>
                             <li>Support:		08137076216</li>
                             <li>General Information:	08165929616</li>
                        </ol>
                  
                    </div>
                </div>
                
            </div>
        </div>
        <div class='col-sm-12 col-lg-3 pt-5' style="background-color:white">

            <div class="text-center">
                <a href="index-2.html"><img class="img-fluid" src="assets/images/logo.png" alt=""></a>
            </div>
            <div class="d-lg-none d-sm-block">
                <h2 class="text-center">Welcome to Al-Qalam Student Information System</h2>
            </div>

            
            <h5 class="text-center text-success mt-2" style="font-size:18px">LOGIN</h5>
            
            <form id="loginForm" action="login.php" method="post" >
                <!-- <input id='_token' type='hidden' name='csrf_token' value='29f7ca80173ec7492ac4e0feae78e8272904e5c42e94706e500877e631fe462f' /> -->
                <div class="form-group">
                    <div class="input-group-prepend">
                        <span style="background: none;border-right: none" class="input-group-text"><i
                                    class="fa fa-user"></i></span>
                        <input style="border-left: none" name="username" type="text" class="form-control"
                               placeholder="Username" required="" value="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group-prepend">
                        <span style="background: none;border-right: none" class="input-group-text"><i
                                    class="fa fa-lock-open"></i></span>
                        <input style="border-left: none" name="password" type="password" class="form-control"
                               placeholder="Password" required="" value="">
                    </div>
                </div>
                <div class="row">
                    <div class="col text-left">
                        <label class="custom-control custom-checkbox">
                            <!--input type="checkbox" class="custom-control-input" id="item_checkbox" name="item_checkbox" value="option1">

                            <span class="custom-control-label">&nbsp
                            </span>-->

                            <!--<a onclick="swal('To register, check admissions first and then use your JAMB number as username password to login')">Register</a>-->

                        </label>
                    </div>
                    <div class="col text-right">
                        <a href="forgotPassword.html">Forgot Password ?</a>
                    </div>
                </div>
                <div class="sign-btn text-center">
                    <button name="login" class="btn btn-danger">Sign In</button>
                </div>
            </form>

            <hr style="border-top: #000 1px solid"/>

            <div class="text-center mt-4">
                <div class="btn-group">
                    <!--<a style="font-size: 9px" href="" class="btn btn-success text-white" data-toggle="modal" data-target="#checkadmission">Pay Screening Fee</a>
                    <a style="font-size: 9px" href="" class="btn btn-dark text-white" data-toggle="modal" data-target="#confirmpayment">Confirm Payment</a>
                    <a href="http://putme.fugusau.edu.ng" class="btn btn-success text-white">Register for POST UTME</a>
                    <a href="" class="btn btn-primary text-white" data-toggle="modal" data-target="#checkadmission2">Check Admission</a>-->
                </div>
            </div>
            <div class="modal fade" id="application" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h2 class="modal-title font-weight-bold">CREATE ACCOUNT</h2>
                        </div>
                        <div class="modal-body mx-3">
                            <form id="applicationForm" action="#" method="post" data-parsley-validate>
                                <input type="hidden" name="csrf_token" value="29f7ca80173ec7492ac4e0feae78e8272904e5c42e94706e500877e631fe462f" />
                                <div class='row'>
                                    <div class='col-sm-3 form-control-plaintext'>First Name*</div>
                                    <div class='col-sm-9'>
                                        <input type='text' required name='firstName' class='form-control'/>
                                    </div>
                                </div>
                                <div class='row mt-1'>
                                    <div class='col-sm-3 form-control-plaintext'>Middle Name</div>
                                    <div class='col-sm-9'>
                                        <input type='text' name='middleName' class='form-control'/>
                                    </div>
                                </div>
                                <div class='row mt-1'>
                                    <div class='col-sm-3 form-control-plaintext'>Last Name*</div>
                                    <div class='col-sm-9'>
                                        <input type='text' required name='lastName' class='form-control'/>
                                    </div>
                                </div>
                                <div class='row mt-1'>
                                    <div class='col-sm-3 form-control-plaintext'>Email*</div>
                                    <div class='col-sm-9'>
                                        <input type='email' required name='email' class='form-control'/>
                                    </div>
                                </div>
                                <div class='row mt-1'>
                                    <div class='col-sm-3 form-control-plaintext'>Username*</div>
                                    <div class='col-sm-9'>
                                        <input type='text' required name='username' class='form-control'/>
                                    </div>
                                </div>
                                <div class='row mt-1'>
                                    <div class='col-sm-3 form-control-plaintext'>Password*</div>
                                    <div class='col-sm-9'>
                                        <input type='password' required name='password' class='form-control'/>
                                    </div>
                                </div>
                                <div class='row mt-1'>
                                    <div class='col-sm-3'>Confirm Password*</div>
                                    <div class='col-sm-9'>
                                        <input type='password' required name='confirmPassword' class='form-control'/>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button name="apply" class="btn btn-info">Submit <i class="fa fa-paper-plane-o ml-1"></i></button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="retrieveInvoice" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h2 class="modal-title font-weight-bold">RETRIEVE INVOICE</h2>
                        </div>
                        <div class="modal-body mx-3">
                            <div class="md-form mb-5">
                                <label data-error="wrong" data-success="right" for="jamb">Email/Order Id/RRR:</label>
                                <input type="text" name="rrr" required="required" class="form-control validate">
                            </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button name="retrieveInvoice" class="btn btn-info">Submit <i class="fa fa-paper-plane-o ml-1"></i>
                            </button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="register text-center">
                 <div class="d-lg-none d-sm-block">Don't have an account? <a href='signup/' data-toggle="modal" data-target="#application">Purchase Application Form</a></div>
                 <br/>
                &copy; <?php echo "Department of Computer Science, ".date("Y"); ?>
            </div>
        </div>
    </div>

    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/plugins/parsley/js/parsley.min.js"></script>
    <script src="assets/plugins/pace/pace.min.js"></script>
    <script src="assets/js/plugins/sweetalert.min.js"></script>

    <script src="assets/js/fugus.js"></script>


    <script>
        // $('button[name="login"]').click(function (e) {
        //     var form = $('#loginForm');
        //     form.parsley().validate();
        //     if (form.parsley().isValid()) {
        //         Pace.restart();
        //         $.ajax({
        //             url: 'ajax/user.php?action=login',
        //             method: 'POST',
        //             data: form.serialize(),
        //             dataType: "json",
        //             success: function (res) {
        //                 if (res.googleAuth == '1') window.location = 'denied.html';
        //                 else if (res.passwordChanged != '0') {
        //                     if (res.status === 200) {
        //                         if (res.type !== 'applicant') {

        //                             window.location.href = res.type + "/#dashboard";
        //                         } else
        //                             window.location.href = res.type;
        //                     } else {
        //                         //if(errorAlert(res.message)){
        //                         //} else {
                                 
        //                         //}
        //                         swal({
        //                             title: 'Login Error',
        //                             text: res.message,
        //                             icon: 'error',
        //                             //showCancelButton: true,
        //                             //button: 'Generate Invoice'
        //                        }).then((result) => {
        //                             if (result) {
        //                                 location.reload();
        //                                //window.location = 'applicant/#payment/screeningInvoice?jambNo=' + jamb;
        //                             }
        //                        })
        //                        //setEmpty(form);
        //                     }
        //                 } else {

        //                     window.location = "denied.html";
        //                 }
        //             }
        //         });
        //     }
        //     return false;
        // });

        $(document).ready(function () {


            //pay invoice
            $('#checkadmission').on('click', '.btn-info', function (e) {
                var jamb = $('#jamb').val();

                $.ajax({
                    url: 'ajax/payment.php?action=payScreeningFees',
                    method: 'POST',
                    data: {jamb: jamb},
                    dataType: 'json',
                    success: function (res) {
                        if (res.status == 200) {
                            swal({
                                title: 'Congratulations!!!',
                                text: res.message,
                                icon: 'success',
                                showCancelButton: true,
                                button: 'Generate Invoice'
                            }).then((result) => {
                                if (result) {
                                    window.location = 'applicant/#payment/screeningInvoice?jambNo=' + jamb;
                                }
                            })
                        } else {
                            alert(res.message, 'error');
                        }
                        $('#checkadmission').modal('hide');
                    }

                });


            });


            $('#checkadmission2').on('click', '.btn-info', function (e) {
                var jamb = $('#jamb3').val();
                $.ajax({
                    url: 'ajax/user.php?action=checkAdmission',
                    method: 'POST',
                    data: {jamb: jamb,
                        csrf_token:'29f7ca80173ec7492ac4e0feae78e8272904e5c42e94706e500877e631fe462f'

                    },
                    dataType: 'json',
                    success: function (res) {
                        if (res.status === 200) {
                            //alert(res.message)
                            var s = document.createElement('div');
                            s.innerHTML = res.message;
                            swal({
                                content: s
                            });
                        } else {
                            alert(res.message, 'error');
                        }
                        $('#checkadmission2').modal('hide');
                    }
                });

            });
        });

        $('button[name="vp"]').click(function (e) {
            var rrr = $('#rrr').val();
            $.ajax({
                url: 'ajax/payment.php?action=verifyPayment',
                method: 'POST',
                data: {rrr: rrr, csrf_token: $('input[name=csrf_token]').val()},
                success: function (res) {
                    var s = document.createElement('div');
                    s.innerHTML = res;
                    swal({
                        content: s
                    });
                    $('#verifypayment').modal('hide');
                }
            });


        });

        //$('select').select2();
        // var form = $('#applicationForm');
        // $('button[name="apply"]').click(function (e) {

        //     form.parsley().validate();
        //     if (form.parsley().isValid()) {
        //         Pace.restart();
        //         $.ajax({
        //             url: 'ajax/user.php?action=apply',
        //             method: 'POST',
        //             data: form.serialize(),
        //             dataType: "json",
        //             success: function (res) {
        //                 if (res.passwordChanged != '0') {
        //                     if (res.status === 200) {
        //                         var s = document.createElement('div');
        //                         s.innerHTML = res.message;
        //                         swal({
        //                             content: s,
        //                             icon: 'success'
        //                         }).then((result) => {
        //                             if (result) {
        //                                 window.location.href = res.type;
        //                             }
        //                         })
        //                     } else {
        //                         errorAlert(res.message);
        //                         //setEmpty(form);
        //                     }
        //                 } else {
        //                     window.location = "denied.html";
        //                 }
        //             }
        //         });
        //     }
        // });

        $('button[name="retrieveInvoice"]').click(function (e) {


            Pace.restart();
            $.ajax({
                url: 'ajax/payment.php?action=retrieveInvoice',
                method: 'POST',
                data: {rrr: $('input[name=rrr]').val(),
                    csrf_token: $('input[name=csrf_token]').val()
                },
                dataType: "json",
                success: function (res) {
                    if (res.status === 200) {
                        var s = document.createElement('div');
                        s.innerHTML = res.message;
                        swal({
                            content: s,
                            icon: 'success',
                            className: 'swal-wide',
                        }).then((result) => {
                            if (result) {
                                window.location = "index-2.html";
                            }
                        })
                    } else {
                        errorAlert(res.message);
                        loadPage();
                        //setEmpty(form);
                    }

                }
            });

        });

        $('select[name=serviceType]').change(function(e) {
         $('#res').html(``);
        $.ajax({
            url: '../ajax/payment.php?action=getAmount',
            data: {
                id: $(this).val(),
                csrf_token: $('input[name=csrf_token]').val(),
            },
            type: 'GET',
            dataType: 'json',
            success:function(res) {
                if(res.amount != 0) {
                    $('input[name=amount]').attr('readonly', 'readonly');
                    $('input[name=amount]').val(res.amount);
                } else {
                    $('input[name=amount]').removeAttr('readonly')
                    $('input[name=amount]').val('');
                }
            }
        });
    });

    </script>
    
</body>


</html>
