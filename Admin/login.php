<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BDIC Admin Login</title>
    <link rel="icon" type="image/png" sizes="16x16" href="img/logo1.png">
    <link href="assest/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="assest/css/style.css" rel="stylesheet">
    <link href="assest/css/index.css" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <a href="index.php"><img src="img/logo1.png" width="100" alt="logo"></a>
                                        <h1>BDIC Bank</h1>
                                    </div>
                                    <form action="query.php" method="post">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Admin Id</strong></label>
                                            <input type="text" class="form-control" placeholder="Enter Admin Id" name="AdminId">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" class="form-control" placeholder="Enter Password" name="password">
                                        </div>
                                        <div class="text-center">
                                            <input type="submit" class="btn btn-primary btn-block btn_btn" name="adminlogin" value="Sign In">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Required vendors -->
    <script src="assest/vendor/global/global.min.js"></script>
    <script src="assest/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="assest/js/custom.min.js"></script>
    <script src="assest/js/deznav-init.js"></script>
    <script src="assest/js/demo.js"></script>
</body>

</html>