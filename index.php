<?php ?>
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
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/inputmask/jquery.inputmask.min.js"></script>
    <title>BLA BLA BAR</title>
</head>
<body>
<nav class="navbar navbar-light bg-black sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand navbar-brand-custom d-flex gap align-items-center" href="#">
            <img src="img/logo.png" alt="" width="40" height="40" class="d-inline-block align-text-top">
            BLA BLA BAR
        </a>
    </div>
</nav>
<section class="mt-3">
    <div class="container">
        <div class="row">
            <div class="col">
                <?php include "templates/slider.php"?>
            </div>
        </div>
    </div>
</section>
<section class="mt-2">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card border-radius-25 bg-blue fw-bold text-white p-2">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Для подключения к сети необходимо отправить свои данные </h5>
                        <form action="" id="data-submit">
                        </form>
                        <div class="card-content d-flex flex-column gap mt-5 mb-5">
                            <div class="input-group flex-nowrap ">
                                <span class="input-group-text fw-bold text-white bg-yellow-orange border-0" id="addon-wrapping"><i class="fa-solid fa-user"></i></span>
                                <input form="data-submit" name="fio" required type="text" class="form-control border-0" placeholder="ФИО" aria-label="fio" aria-describedby="addon-wrapping">
                            </div>
                            <div class="input-group flex-nowrap ">
                                <span class="input-group-text fw-bold text-white bg-yellow-orange border-0" id="addon-wrapping"><i class="fa-solid fa-phone"></i></span>
                                <input form="data-submit" name="phone" required type="text" class="form-control border-0 phone" placeholder="+7 (777) 777 77 77" aria-label="phone" aria-describedby="addon-wrapping">
                            </div>
                            <div class="input-group flex-nowrap ">
                                <button form="data-submit" id="submit-btn" class="btn btn-orange d-flex justify-content-center align-items-center">
                                    <span id="btn-content">Отправить</span>
                                    <span id="spinner">
                                        <div class="loader"></div>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
</section><section class="mt-2">
    <div class="container">
        <div class="row">
            <div class="col-md">
                <div class="test p-3 text-white fw-bold text-uppercase text-center">
                    Специальные предложения
                </div>
            </div>
        </div>
    </div>
</section>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/fontawesonme/all.js"></script>
<script src="js/process/formHandler.js"></script>
<script>
    $(".phone").inputmask("+7(999) 999 99 99")
</script>
</body>
</html>