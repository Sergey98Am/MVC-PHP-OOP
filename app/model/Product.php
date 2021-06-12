<?php

namespace App\model;

class Product extends Model
{
    function all()
    {
        $sql = "SELECT * FROM `products`";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    function create($title, $price, $quantity)
    {
        $sql = "INSERT INTO `products` (`title`, `price`, `quantity`) VALUES ('$title', '$price', '$quantity')";
        return mysqli_query($this->conn, $sql);
    }

    function find($id)
    {
        $sql = "SELECT * FROM `products` WHERE `id` = '$id'";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_assoc($result);
    }

    function update($id, $title, $price, $quantity)
    {
        $sql = "UPDATE `products` SET `title`='$title', `price`='$price', `quantity`='$quantity' WHERE `id`='$id'";
        return mysqli_query($this->conn, $sql);
    }

    function delete($id)
    {
        $sql = "DELETE FROM `products` WHERE `id`='$id'";
        return mysqli_query($this->conn, $sql);
    }
}