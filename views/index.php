<?php 
require_once 'controllers/TareaController.php';

// Crear el controlador
$controller = new TareaController();

// Obtener la acción desde la URL o usar "index" por defecto
$accion = isset($_GET['accion']) ? $_GET['accion'] : 'index';

// Ejecutar la acción
switch ($accion) { 
    case 'index':
        $controller->home();
        break;

    // Aquí puedes agregar más acciones, por ejemplo:
    // case 'crear':
    //     $controller->crear();
    //     break;

    default:
        echo "Acción no reconocida.";
        break;
}
?>