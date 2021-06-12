<?php

namespace App\Controller;

class HomeController {
    public function index() {
        $title = 'Title';
        return view('home', compact('title'));
    }
}