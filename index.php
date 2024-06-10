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
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner border-radius-25">
                        <div class="carousel-item active">
                            <img src="https://placehold.jp/703e4f/ffffff/600x400.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://placehold.jp/703e4f/ffffff/400x400.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://placehold.jp/703e4f/ffffff/800x400.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
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