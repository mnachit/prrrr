<?php 
 // include
 include('script.php');
 if(isset($_SESSION['first_namee'])){
    header("location: home.php");
 }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- <script type="text/javascript">
        function preventBack() { window.history.forward(); }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null };
    </script> -->

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body style= "background: linear-gradient(90deg, rgba(43,204,189,1) 0%, rgba(6,69,67,0.8715861344537815) 50%);">
        <div class="container">
            <!-- Outer Row -->
            <div class="row justify-content-center">

                <div class="col-lg-12 col-md-9">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <img class="col-lg-6 d-none d-lg-block" src="f1.jpg" alt="my_photo">
                                <div class="col-lg-6" style="padding-top : 150px">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <?php if (isset($_SESSION['message'])){?>
                                                <div class="alert alert-danger" role="alert">
                                                <?php    echo $_SESSION['message'];
                                                unset($_SESSION['message']);
                                                ?></div>
                                            <?php } ?>
                                            <?php if (isset($_SESSION['message_ver'])){?>
                                                <div class="alert alert-success" role="alert">
                                                <?php    echo $_SESSION['message_ver'];
                                                        unset( $_SESSION['message_ver']);
                                                ?>
                                                </div>
                                            <?php } ?>
                                            <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                        </div>
                                        
                                        <form class="user" action="script.php" method="POST">
                                            <div class="form-group">
                                                <input id="username" name="logemail" type="email" class="form-control form-control-user"
                                                    id="exampleInputEmail" aria-describedby="emailHelp"
                                                    placeholder="Enter Email Address...">
                                            </div>
                                            <div class="form-group">
                                                <input id="password" name="logpass" type="password" class="form-control form-control-user"
                                                    id="exampleInputPassword" placeholder="Password">
                                            </div>
                                            <!-- <div class="form-group">
                                                <div class="custom-control custom-checkbox small">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck">
                                                    <label class="custom-control-label" for="customCheck">Remember
                                                        Me</label>
                                                </div>
                                            </div> -->
                                            <button class="btn btn-primary btn-user btn-block" type="submit" name="login">
                                                Login
                                            </button>
                                        </form>
                                        <div class="text-center pt-2">
                                            <a class="small" href="pass.php">Forgot Password?</a>
                                        </div> 
                                        <div class="text-center pt-2">
                                            <a class="small" href="register.php">Create an Account!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>