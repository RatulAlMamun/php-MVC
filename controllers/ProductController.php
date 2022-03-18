<?php

namespace app\controllers;

use app\Router;

class ProductController
{
    public function index (Router $router)
    {
        $search = $_GET["search"] ?? "";
        $products = $router->db->getProducts($search);
        $router->renderView("products/index", [
            "products" => $products,
            "search" => $search
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