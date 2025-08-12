<?php
class TareaModel { 
private $conn; 
private $table_name ="tareas";
public function __contruct($db)

{ 

  $this->conn = $bd;  
}
}
//leer tareas 
public function leer (){ 
$query="SELET id, titulo, descripcion, fecha_creacion FROM " , $this->table_name , "ODER BY fecha_creacion DESC"
stmt= $this->conn->prepare($query); 
$stmt->execute();
return $stmt; 


}

?>