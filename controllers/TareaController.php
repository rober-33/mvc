<?php
require_once 'models/TareaModel.php';
require_once 'config/Database.php';

class TareaController{
    private $db;
    private $tareaModel;

    public function __construct(){
        $database = new Database();
        $this->db = $database->getConnection();
        $this->tareaModel = new TareaModel($this->db);
    }
    

    // Mostrar todas las tareas
    public function leer(){
        $tareas = $this->tareaModel->leer();
        include 'views/home.php';
    }

    // Crear la tarea
    public function crear(){
        include 'views/crear.php';
    }

    // Guardar tarea
    public function guardar(){
        if ($_POST){
            $titulo = $_POST['titulo'];
            $descripcion = $_POST['descripcion'];

            if($this->tareaModel->crear($titulo, $descripcion)){
                header("Location: index.php");
            } else {
                echo "Error al crear la tarea.";
            }
        }
    }

    // Mostrar la información en el formulario

     



    public function editar(){
        if (isset($_GET['id'])){
            $id = $_GET['id'];
            $tarea = $this->tareaModel->leerUno($id);
            if($tarea){
                include 'views/editar.php';
            } else {
                echo "Tarea no encontrada.";
            }
        }
    }



//actualizar tarea 

  
    public function actualizar(){
        if ($_POST){
            $id = $_POST['id'];
            $titulo = $_POST['titulo'];
            $descripcion = $_POST['descripcion'];
           
            if($this->tareaModel->actualizar($id,$titulo,$descripcion)){
                header("location: index.php"); 
            }
            else{ 
                echo "no se puede actualizar la tarea.";
            }
                
            }  
                
            }


            //borrar tarea 
            public function eliminar($id){
        $query = "DELETE " . $this->table_name . " SET estado = 'borrado' WHERE id = :?";
        $stmt = $this->conn->prepare($query);
      




       public function eliminar($id){
    $query = "UPDATE " . $this->table_name . " SET estado = 0 WHERE id = ?";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(1, $id);
   
     
    if ($stmt->execute ()) { 
        return true; 
    }
}
    }
        }


        








?>