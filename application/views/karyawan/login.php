<!DOCTYPE html>
<html lang="en">   
<head>
    <title>SIAGA | Login Karyawan</title><meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/matrix-login.css" />
    <link href="<?php echo base_url(); ?>assets/dist/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <style>
        .login-logo {
            font-size: 25px !important;
            text-align: center;
            margin-bottom: 25px;
            font-weight: 300;
        }
        .login-logo a {
            color: #FFF;
        }
    </style>
</head>
<body>
    <div id="loginbox">            
        <form id="loginform" class="form-vertical" action="<?php echo base_url('Karyawan/login'); ?>" method="post">
            <div class="control-group normal_text login-logo">
                <a href="<?php echo base_url(); ?>Karyawan"><b>SIAGA</b> Karyawan Application</a>
            </div>
            <div class="control-group normal_text">
                <?php echo show_err_msg($this->session->flashdata('error_msg')); ?>
            </div>
            <div class="control-group">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text" name="id_karyawan" placeholder="ID Karyawan" />
                    </div>
                </div>
            </div>
            <!-- <div class="control-group">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" placeholder="Password" />
                    </div>
                </div>
            </div> -->
            <div class="form-actions">
                <span class="pull-left"><a href="<?php echo base_url(); ?>Auth" class="flip-link btn btn-info" id="to-recover">Login Admin</a></span>
                <span class="pull-right"><input type="submit" class="btn btn-success" value="Login" /></span>
            </div>
        </form>
    </div>
    <script src="<?php echo base_url(); ?>assets/dist/js/jquery.min.js"></script>  
    <script src="<?php echo base_url(); ?>assets/dist/js/matrix.login.js"></script> 
</body>
</html>
