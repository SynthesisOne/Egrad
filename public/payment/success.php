<?php
session_start();
if(isset($_SESSION['success'])) unset($_SESSION['success']);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <title>Document</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success" role="alert">
                <h4>Благодарим за выбор нашего магазина! Менеджер вскоре свяжется с Вами для согласования деталей заказа.</h4>
            </div>
        </div>
    </div>
</div>

</body>
</html>