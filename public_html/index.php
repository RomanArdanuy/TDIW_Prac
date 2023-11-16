<?php
$accio = $_GET['accio'] ?? NULL;

switch ($accio) {
    case 'registre':
        include __DIR__.'/registre.php';
        break;
    case 'usuari':
        include __DIR__.'/usuari.php';
        break;
    default:
        include __DIR__.'/categoria.php';
        break;
}
?>
