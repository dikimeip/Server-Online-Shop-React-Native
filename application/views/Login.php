<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="<?php echo base_url() ?>assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/libs/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><h1>TUKU SHOP</h1><span class="splash-description">Please enter your user information.</span></div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="username" type="text" placeholder="Username" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="password" type="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                </form>
            </div>
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>
 
</html>