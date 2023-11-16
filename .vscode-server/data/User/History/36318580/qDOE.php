<?php
// controller/llistar_categories.php

require_once __DIR__.'/../model/connectaDb.php';
require_once __DIR__.'/../model/categories.php';

$connexio = connectaBD(); //connexio BD
$categories = getCategories(); // Aquesta crida és al model

include __DIR__.'/../view/llistar_categories.php';
