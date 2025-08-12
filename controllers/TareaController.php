<?php
require_once 'models/TareaModel.php'; 
require_once 'config/Database.php'; 
class TareaController{ 
    private $db; 
    private $tareaModel; 

    public function__construct(){ 

        $database =new Database->getconnection(); 
        $this->TareaModel = new TareaModel($this->db);

    }


    //mostrar todas las tareas
    public function home (){ 
    $tareas = $this->tareaModel->leer(); 
    include 'views/home.php'
    }

}


?>