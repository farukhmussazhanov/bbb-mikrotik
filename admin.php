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
            <div class="col-md-2">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start justify-content-center">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <button class="nav-link active" id="v-pills-clients-tab" data-bs-toggle="pill" data-bs-target="#v-pills-clients" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Список клиентов</button>
                                <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>
                                <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>
                                <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10">
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
                                        <th>Дата создания</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
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
        }
    });
</script>
</body>
</html>
