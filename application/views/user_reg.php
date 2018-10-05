<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User Registration</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="<?php echo base_url('admin/backEnd/assets/css/normalize.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('admin/backEnd/')?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('admin/backEnd/')?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url('admin/backEnd/')?>assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url('admin/backEnd/')?>assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url('admin/backEnd/')?>assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?php echo base_url('admin/backEnd/')?>assets/scss/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>
<body class="bg-dark">


<div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
        <div class="login-content">
            <div class="login-logo">
                <title>User Registration</title>
            </div>
            <div class="login-form">
                <form action="<?php echo base_url()?>Welcome/save_user" method="post">
                    <h3 style="text-align: center;color:green "> <?php
                        $message=$this->session->userdata('message');
                        echo $message;
                        $this->session->unset_userdata('message');
                        ?>
                    </h3>
                    <div class="form-group">
                        <label>User Name</label>
                        <input type="text" class="form-control" placeholder="User Name" name="name">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <textarea type="text" class="form-control" placeholder="Address" rows="3" name="address"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" placeholder="Phone" name="phone">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>

                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>

                    <div class="register-link m-t-15 text-center">
                        <p>Already have account ? <a href="<?php echo base_url('Welcome/user_login')?>"> Sign in</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script src="<?php echo base_url('admin/backEnd/')?>assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="<?php echo base_url('admin/backEnd/')?>assets/js/popper.min.js"></script>
<script src="<?php echo base_url('admin/backEnd/')?>assets/js/plugins.js"></script>
<script src="<?php echo base_url('admin/backEnd/')?>assets/js/main.js"></script>


</body>
</html>
