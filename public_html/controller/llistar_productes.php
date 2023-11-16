<?php

require_once __DIR__.'/../model/conectaBD.php';
require_once __DIR__.'/../model/producte_detall.php';

$connexio = connectaBD(); // Conexión a BD
$productes = getProductesDetalls($connexio); // Pasar $connexio como argumento

include __DIR__.'/../view/product_list.php';