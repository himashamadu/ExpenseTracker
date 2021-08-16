<?php
defined('BASEPATH') or exit('No direct Script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Drixo - Responsive Booststrap 4 Admin & Dashboard</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="<?php echo base_url()."assets/";?>images/favicon.ico">
    <link href="<?php echo base_url()."assets/";?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url()."assets/";?>css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url()."assets/";?>css/style.css" rel="stylesheet" type="text/css">

</head>

<body class="fixed-left">

    <!--add POST method-->

    <form method="post" action="<?php echo base_url('LoginUser/login_user'); ?>">
        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner"></div>
            </div>
        </div>

        <!-- Begin page -->
        <?php echo $this->session->flashdata('error');?>
        <div class="accountbg">

            <div class="content-center">
                <div class="content-desc-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5 col-md-8">
                                <div class="card">
                                    <div class="card-body">



                                        <h2 class="text-muted text-center font-25"><b>Sign In</b></h2>


                                        <div class="p-2">
                                            <form class="form-horizontal m-t-20" action="index.html">

                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <input class="form-control" type="text" required=""
                                                            placeholder="Username" name="user">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <input class="form-control" type="password" required=""
                                                            placeholder="Password" name="pass">
                                                    </div>
                                                </div>



                                                <div class="form-group text-center row m-t-20">
                                                    <div class="col-12">

                                                        <button
                                                            class="btn btn-primary btn-block waves-effect waves-light"
                                                            type="submit" name="login" value="Login">Log In</button>


                                                    </div>
                                                </div>

                                                <div class="form-group m-t-10 mb-0 row">
                                                    <div class="col-sm-7 m-t-20">
                                                        <a href="pages-recoverpw.html" class="text-muted"><i
                                                                class="mdi mdi-lock"></i> Forgot your password?</a>
                                                    </div>
                                                    <div class="col-sm-5 m-t-20">
                                                        <a href="pages-register.html" class="text-muted"><i
                                                                class="mdi mdi-account-circle"></i> Create an
                                                            account</a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

</body>

</html>