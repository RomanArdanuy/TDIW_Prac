<?php
// controller/llistar_categories.php

require_once __DIR__.'/../model/connectaDB.php';
require_once __DIR__.'/../model/categoria.php';

$connexio = connectaBD(); //connexio BD
$categories = getCategories(); // Aquesta crida és al model

include __DIR__.'/../view/categoria_list.php';
