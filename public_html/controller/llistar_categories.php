<?php
// controller/llistar_categories.php

// controller/llistar_categories.php

require_once __DIR__.'/../model/conectaBD.php';
require_once __DIR__.'/../model/categoria.php';

$connexio = connectaBD(); // Conexión a BD
$categories = getCategories($connexio); // Pasar $connexio como argumento

include __DIR__.'/../view/categoria_list.php';

