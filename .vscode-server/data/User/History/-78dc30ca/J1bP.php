<?php

$conn = pg_connect("host=127.0.0.1 dbname=tdiw-k11 user=tdiw-k11
password=FYF1iC4n");

print ($conn);

    //https: tdiw-k11.deic-docencia.uab.cat/index.php?action=categories&category_id=2
    $action = $_GET['action'] ?? null;
    
    switch($action){
        case 'categories':
            require __DIR__.'/Controller/llista_categories.php';
            break;
        case 'productes':
            require __DIR__.'/Model/Productes.php';
            break;
        case 'detalle_producte':
            require __DIR__.'/View/product_list.php';
            break;
        default:
            require __DIR__.'/resource_category_list.php';
            break;
    }

require 'model.php';
require 'view.php';
require 'controller.php';

$model = new CategoriaModel();
$view = new CategoriaView();
$controller = new CategoriaController($model, $view);

$controller->mostrarCategorias();
