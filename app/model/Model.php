<?php

namespace App\model;

class Model
{
    protected $conn;

    function __construct()
    {
        $this->connect();
    }

    function connect()
    {
        if (!$this->conn) {
            $this->conn = mysqli_connect(HOST, USER, PASSWORD, DB_NAME);
        }
    }
}