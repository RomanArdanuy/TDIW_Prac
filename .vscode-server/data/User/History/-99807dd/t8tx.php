class CategoriaController {
    private $model;
    private $view;

    public function __construct($model, $view) {
        $this->model = $model;
        $this->view = $view;
    }

    public function mostrarCategorias() {
        $categorias = $this->model->getCategorias();
        $this->view->mostrarCategorias($categorias);
    }
}
