<?php

class Router
{
    private $controller = 'App\Controller\HomeController';
    private $method = 'index';
    private $params = [];

    public function __construct()
    {
        $this->parseUri();
    }

    private function parseUri()
    {
        $uri = $_GET['uri'] ?? '';

        $uri = explode('/', trim(strtolower($uri), '/'));

        if (!empty($uri[0])) {
            $controller = ucfirst($uri[0]) . 'Controller';
            // for example PostController
            unset($uri[0]);
            // unset 'post'
            $controller = 'App\Controller\\' . $controller;
            // App\Controller\PostController
            // echo $controller;

            if (class_exists($controller)) {
                $this->controller = $controller;
            } else {
                return error(404);
            }
        }

        $class = $this->controller;
        $class = new $class;
        // get object from 'PostController class'

        if (isset($uri[1])) {
            $method = $uri[1];
            // for example 'index'
            unset($uri[1]);

            if (method_exists($class, $method)) {
                $this->method = $method;
            } else {
                return error(404);
            }
        }

        if (isset($uri[2])) {
            $this->params = array_values($uri);
            // print_r($this->params);
        }

        call_user_func_array([$class, $this->method], $this->params);
    }
}