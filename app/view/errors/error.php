<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="error">
    <?php require "$status.php" ?>
</div>
</body>
</html>

<style>
    *, *:before, *:after {
        box-sizing: border-box;
    }

    body {
        margin: 0;
    }

    .error {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: cornflowerblue;
    }

    h1 {
        margin: 0;
        color: white;
    }
</style>