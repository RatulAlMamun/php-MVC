<?php

namespace app\controllers;

use app\Router;

class ProductController
{
    public function index (Router $router)
    {
        $products = $router->db->getProducts();
        $router->renderView("products/index", [
            'products' => $products
        ]);
    }


    public function create ()
    {
        echo "create Page";     
    }


    public function update ()
    {
        echo "update Page"; 
    }


    public function delete ()
    {
        echo "delete Page";
    }
}