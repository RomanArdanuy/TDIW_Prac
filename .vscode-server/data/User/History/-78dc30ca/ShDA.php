<?php

    https: tdiw-k11.deic-docencia.uab.cat/index.php?action=categories&category_id=2
    $action = $_GET['action'] ?? null;
    
    switch($action){
        case 'categories':
            require __DIR__.'/controller/category_list.php';
            break;
        case 'productes':
            require __DIR__.'resource_productes_list.php';
            break;
        case 'detalle_producte':
            require __DIR__.'resource_producte_detail.php';
            break;
        default:
            require __DIR__.'/resource_category_list.php';
            break;
    }