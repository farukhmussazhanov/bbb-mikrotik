<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/all.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/datatables.min.css">
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/inputmask/jquery.inputmask.min.js"></script>
    <title>Login</title>
</head>
<body>
<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <form action="" id="login-form" class="d-flex flex-column gap-3" >
                            <div class="d-flex align-items-center gap-2" >
                                <div class="login__logo__container" href="">
                                    <img class="login__logo" src="img/logo.png">
                                </div>
                                <span class="login__brand">
                                    BLA BLA BAR
                                </span>
                            </div>
                            <label for="login">Логин:</label>
                            <input type="text" name="login" id="login" placeholder="login" class="form-control">
                            <label for="password">Пароль</label>
                            <input type="password" name="password" id="password" placeholder="***********" class="form-control">
                            <button class="btn btn-orange d-flex justify-content-center align-items-center" id="submit-btn">
                                <span id="btn-content">Войти</span>
                                <span id="spinner">
                                        <div class="loader"></div>
                                    </span>
                            </button>
                            <div class="alert alert-danger" style="display: none" id="error-msg" role="alert">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</section>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/fontawesonme/all.js"></script>
<script src="js/datatables.min.js"></script>
<script src="js/process/loginHandler.js"></script>
</body>
</html>