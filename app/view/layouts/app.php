<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo asset('/asset/bootstrap/css/bootstrap.min.css'); ?>">
</head>
<body>
<div class="mvc">
    <?php require "../app/view/layouts/navbar.php"; ?>
    <?php require "../app/view/$view.php"; ?>
</div>
<script src="<?php echo asset('asset/jquery/jquery.min.js') ?>"></script>
<script src="<?php echo asset('/asset/bootstrap/js/bootstrap.min.js') ?>"></script>
</body>
</html>

<style>
    *, *:before, *:after {
        box-sizing: border-box;
    }

    .mvc {
        min-height: 100vh;
        background-image: url(<?php echo asset('asset/images/background.png') ?>);
        background-size: cover;
        background-attachment: fixed;
    }
</style>