<?php
session_start();
require_once "classes/autoload.php";
if(!Auth::checkAuth()){
    header("Location:login.php");
    exit;
}
?>
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
    <title>Admin</title>
</head>
<body>
<nav class="navbar navbar-light bg-black sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand navbar-brand-custom d-flex gap align-items-center" href="#">
            <img src="img/logo.png" alt="" width="40" height="40" class="d-inline-block align-text-top">
            BLA BLA BAR
        </a>
        <a href="logout.php" class="btn btn-light">
            Выход
        </a>
    </div>
</nav>
<section class="mt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 mt-1">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start justify-content-center">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <button class="nav-link active" id="v-pills-clients-tab" data-bs-toggle="pill" data-bs-target="#v-pills-clients" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Список клиентов</button>
                                <button class="nav-link" id="v-pills-slider-tab" data-bs-toggle="pill" data-bs-target="#v-pills-slider" type="button" role="tab" aria-controls="v-pills-slider" aria-selected="false">Настройки слайдера</button>
<!--                                <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>-->
<!--                                <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 mt-1">
               <div class="card">
                    <div class="card-body">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-clients" role="tabpanel" aria-labelledby="v-pills-clients-tab">
                                <h2 class="card-title">Список клиентов</h2>
                                <table id="table" class="display" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>ФИО</th>
                                        <th>Телефон</th>
                                        <th>IP address</th>
                                        <th>Mac address</th>
                                        <th>Дата создания</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>id</th>
                                        <th>ФИО</th>
                                        <th>Телефон</th>
                                        <th>IP address</th>
                                        <th>Mac address</th>
                                        <th>Дата создания</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="v-pills-slider" role="tabpanel" aria-labelledby="v-pills-slider-tab">
                                <div class="d-flex gap-5 flex-column">
                                    <div>
                                        <h2 class="card-title">Настройки слайдера</h2>
                                        <div id="success-message" style="display: none">
                                            <div class="alert alert-success" role="alert">
                                                Файл успешно загружен!
                                            </div>
                                        </div>
                                        <div id="error-message" style="display: none">
                                            <div class="alert alert-danger" role="alert">
                                                Ошибка при загрузке файла!
                                            </div>
                                        </div>
                                        <form action="" id="slider-form"></form>
                                        <div class="d-flex gap-2">
                                            <div style="flex-grow: 3">
                                                <input form="slider-form" type="file" id="file" accept="image/*" class="form-control" >
                                            </div>
                                            <div style="flex-grow: 1">
                                                <button form="slider-form" class="btn btn-orange d-flex justify-content-center align-items-center" id="submit-btn">
                                                    <span id="btn-content">Загрузить</span>
                                                    <span id="spinner">
                                                        <div class="loader"></div>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <h2 class="card-title">Список файлов</h2>
                                        <div class="d-flex gap-3 flex-wrap" id="image-list">
                                           <?php include("templates/image-list.php")?>
                                        </div>

                                    </div>
                                    <div>
                                        <h2 class="card-title">Предпросмотр</h2>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-4"></div>
                                                <div class="col-md-4">
                                                    <div id="preview">
                                                        <?php include "templates/slider.php"?>
                                                    </div>
                                                </div>
                                                <div class="col-md-4"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/fontawesonme/all.js"></script>
<script src="js/datatables.min.js"></script>
<script>
    function removeItem(id){
        let formData = new FormData();
        formData.append('id', id);
        let btn = $("[data-btn-remove-"+id+"]")
        let spinner = $("[data-spinner-"+id+"]")
        let btnContent = $("[data-btn-remove-content-"+id+"]")
        let card = $("[data-image-key-"+id+"]")
        let errorMessage = $("[data-error-message-"+id+"]")
        $.ajax({
            url: 'process/removeFileProcess.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            dataType: 'json',
            beforeSend: () => {
                btn.attr("disabled",true);
                spinner.show();
                btnContent.hide();
            },
            success: function(response) {
                if(response.success !== undefined && response.success){
                    btn.removeAttr("disabled");
                    spinner.hide();
                    btnContent.show();
                    getPreview();
                    card.fadeOut();
                    setTimeout(()=>{
                        card.remove();
                    },2000)
                }else {
                    btn.removeAttr("disabled");
                    spinner.hide();
                    btnContent.show();
                    errorMessage.fadeIn();
                    setTimeout(()=>{
                        errorMessage.fadeOut();
                    },2000)
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Image upload failed. Status: ' + textStatus);
            }
        });
    }
</script>
<script>
    const table = new DataTable('#table',{
        ajax: 'process/DataTable/server_processing.php',
        processing: true,
        serverSide: false,
        order: [
            [0, 'desc'],
        ],
        layout: {
            topStart: {
                buttons: ['csv', 'excel']
            }
        },
        responsive: true
    });
</script>
<script>
    const getImageList = () => {
        $.ajax({
            url: 'templates/image-list.php', // Укажите URL вашей PHP-страницы
            type: 'GET', // Метод запроса (GET, POST и т. д.)
            dataType: 'html', // Ожидаемый тип данных (html, json, xml и т. д.)
            success: function(response) {
                $("#image-list").html(response)
            },
            error: function(jqXHR, textStatus, errorThrown) {
                // Обработка ошибки
                console.error('Произошла ошибка:', textStatus, errorThrown);
            }
        });
    }
    function getPreview (){
        $.ajax({
            url: 'templates/slider.php', // Укажите URL вашей PHP-страницы
            type: 'GET', // Метод запроса (GET, POST и т. д.)
            dataType: 'html', // Ожидаемый тип данных (html, json, xml и т. д.)
            success: function(response) {
               $("#preview").html(response)
            },
            error: function(jqXHR, textStatus, errorThrown) {
                // Обработка ошибки
                console.error('Произошла ошибка:', textStatus, errorThrown);
            }
        });
    }
    $('#slider-form').on('submit', (e) => {
        e.preventDefault();
        let fileInput = $('#file')[0];
        let file = fileInput.files[0];

        if (file) {
            let formData = new FormData();
            formData.append('image', file);

            $.ajax({
                url: 'process/addFileProcess.php',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                dataType: 'json',
                beforeSend: () => {
                    $("#submit-btn").attr("disabled",true);
                    $("#spinner").show();
                    $("#btn-content").hide();
                },
                success: function(response) {
                    if(response.success !== undefined && response.success){
                        $("#submit-btn").removeAttr("disabled");
                        $("#spinner").hide();
                        $("#btn-content").show();
                        $("#success-message").fadeIn();
                        $("#file").val("");
                        setTimeout(()=>{
                            $("#success-message").fadeOut();
                        },2000)
                        getPreview();
                        getImageList();
                    }else {
                        $("#submit-btn").removeAttr("disabled");
                        $("#spinner").hide();
                        $("#btn-content").show();
                        $("#error-message").fadeIn();
                        $("#file").val("");
                        setTimeout(()=>{
                            $("#error-message").fadeOut();
                        },2000)
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Image upload failed. Status: ' + textStatus);
                }
            });
        } else {
            alert('Please select an image file to upload.');
        }
    });
</script>
</body>
</html>
