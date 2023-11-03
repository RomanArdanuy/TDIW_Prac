class CategoriaView {
    public function mostrarCategorias($categorias) {
        echo "<div class='categorias'>";
        foreach ($categorias as $categoria) {
            echo "<div class='categoria'>";
            echo "<img src='images/{$categoria['imagen']}' alt='{$categoria['nombre']}'>";
            echo "<p>{$categoria['nombre']}</p>";
            echo "</div>";
        }
        echo "</div>";
    }
}
