<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Tareas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>Lista de Tareas</h1>
            <a href="crear_tarea.php" class="btn btn-primary">Crear Nueva Tarea</a>
        </div>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Título</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
               <?php
                  // Aquí asumimos que $tareas es un PDOStatement obtenido de una consulta previa
                  while ($row = $tareas->fetch(PDO::FETCH_ASSOC)): 
               ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['titulo']); ?></td>
                    <td><?php echo htmlspecialchars($row['descripcion']); ?></td>
                    <td>
                        <a href="editar_tarea.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                        <a href="eliminar_tarea.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que quieres eliminar esta tarea?');">Eliminar</a>
                    </td>
                </tr>
               <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>