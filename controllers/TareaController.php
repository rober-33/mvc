<?php
require_once 'models/TareaModel.php';
require_once 'config/Database.php';

class TareaController {
    private $db;
    private $tareaModel;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->tareaModel = new TareaModel($this->db);
    }

    // Mostrar todas las tareas
    public function index() {
        $tareas = $this->tareaModel->leer();
        include 'views/home.php';
    }

    // Crear la tarea (mostrar formulario)
    public function crear() {
        include 'views/crear.php';
    }

    // Guardar tarea
    public function guardar() {
        if ($_POST) {
            $titulo = $_POST['titulo'];
            $descripcion = $_POST['descripcion'];

            if ($this->tareaModel->crear($titulo, $descripcion)) {
                header("Location: index.php");
            } else {
                echo "Error al crear la tarea.";
            }
        }
    }

//mostrar la informacion en el formulario

public function editar (){ 

    if (isset ($_GET['id'])) { 

    
        $id =$_GET['id']; 
        $tarea =$this->tareaModel->leeruno('id'); 
        if (tarea) { 
            include 
        }
    }
}

} 




?>
