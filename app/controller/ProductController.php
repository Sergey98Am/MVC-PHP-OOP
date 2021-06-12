<?php

namespace App\Controller;

use App\model\Product;

class ProductController
{
    private $product;

    function __construct()
    {
        $this->product = new Product;
    }

    public function index()
    {
        $products = $this->product->all();
        return view('products/products', compact('products'));
    }

    public function create($id = null)
    {
        if ($id) {
            return error(400);
        }

        return view('products/create');
    }

    public function store()
    {
        $title = $_POST['title'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];

        if (($title && $price && $quantity) && (is_numeric($price) && is_numeric($quantity))) {
            $result = $this->product->create($title, $price, $quantity);

            if ($result) {
                return redirect('product');
            }
        }
        return redirect('product/create');
    }

    public function edit($id = null)
    {
        if ($id === null) {
            return error(404);
        }

        $product = $this->product->find($id);

        if (!$product) {
            return error(400);
        }

        return view('products/edit', compact('product'));
    }

    public function update($id = null)
    {
        if ($id === null) {
            return error(404);
        }

        $product = $this->product->find($id);

        if (!$product) {
            return error(400);
        }

        $title = $_POST['title'] ?? '';
        $price = $_POST['price'] ?? '';
        $quantity = $_POST['quantity'] ?? '';

        if ($title && $price && $quantity) {
            $result = $this->product->update($id, $title, $price, $quantity);

            if ($result) {
                return redirect('product');
            }
        }
        return redirect('product/edit/' . $id);
    }

    public function delete($id = null)
    {
        if ($id === null) {
            return error(404);
        }

        $product = $this->product->find($id);

        if (!$product) {
            return error(400);
        }

        $this->product->delete($id);
        return redirect('product');
    }
}