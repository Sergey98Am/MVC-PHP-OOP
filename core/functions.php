<?php

function asset($path = '')
{
    return APP_URL . trim($path, '/');
}

function url($url = '')
{
    return APP_URL . trim($url, '/');
}

function view($view, $data = [])
{
    extract($data);
    require '../app/view/layouts/app.php';
}

function redirect($url = '')
{
    if ($url) {
        $location = APP_URL . trim($url, '/');
        header("location: $location");
    }
}

function error($status)
{
    require "../app/view/errors/error.php";
}