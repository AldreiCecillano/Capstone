<!DOCTYPE html>
<html>

<?php
session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign In | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="../css/font.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST">
                    <div class="msg">File Management System</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit" name="btn_submit">SIGN IN</button>
                        </div>
                    </div>
                </form>

                <?php
                include "connection.php";

                if(isset($_POST['btn_submit'])){
                    $username = $_POST['username'];
                    $password = $_POST['password'];

                    $a = mysqli_query($con,"SELECT * from tbladmin where username = '".$username."' and password = '".$password."' ");
                    $ad = mysqli_num_rows($a);

                    $f = mysqli_query($con,"SELECT * from tblfaculty where username = '".$username."' and password = '".$password."' ");
                    $fa = mysqli_num_rows($f);

                    if($ad > 0){
                        while($row = mysqli_fetch_array($a)){
                          $_SESSION['role'] = "Administrator";
                          $_SESSION['userid'] = $row['id'];
                          $_SESSION['username'] = $row['username'];
                        }    
                        header ('location: message/message.php');
                    }
                    else{
                        while($row = mysqli_fetch_array($f)){
                          $_SESSION['role'] = "Faculty";
                          $_SESSION['userid'] = $row['id'];
                          $_SESSION['username'] = $row['username'];
                        }    
                        header ('location: message/faculty_message.php');
                    }
                }

                ?>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="../plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="../js/admin.js"></script>
    <script src="../js/pages/examples/sign-in.js"></script>
</body>

</html>