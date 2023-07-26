<?php
require_once('conexion.php');

if (isset($_POST['action'])) {
  $action = $_POST['action'];

  switch ($action) {
    case 'agregarTarea':
      if (isset($_POST['tarea']) && isset($_POST['frecuencia'])) {
        $tarea = $_POST['tarea'];
        $frecuencia = $_POST['frecuencia'];
        $query = "INSERT INTO tareas (tarea, frecuencia) VALUES ('$tarea', '$frecuencia')";
        mysqli_query($conn, $query);
      }
      break;

    case 'agregarMiembro':
      if (isset($_POST['nombre'])) {
        $nombre = $_POST['nombre'];
        $query = "INSERT INTO familia (nombre) VALUES ('$nombre')";
        mysqli_query($conn, $query);
      }
      break;

    case 'marcarTareasRealizadas':
      if (isset($_POST['tarea_miembro'])) {
        $tarea_miembro = $_POST['tarea_miembro'];
        foreach ($tarea_miembro as $value) {
          $values = explode('-', $value);
          $tarea_id = $values[0];
          $miembro_id = $values[1];
          $query = "INSERT INTO tareas_realizadas (tarea_id, miembro_id, fecha_asignacion, fecha_finalizacion) VALUES ('$tarea_id', '$miembro_id', NOW(), NULL)";
          mysqli_query($conn, $query);
        }
      }
      break;

    case 'editarTarea':
      if (isset($_POST['id']) && isset($_POST['tarea']) && isset($_POST['frecuencia'])) {
        $id = $_POST['id'];
        $tarea = $_POST['tarea'];
        $frecuencia = $_POST['frecuencia'];
        $query = "UPDATE tareas SET tarea='$tarea', frecuencia='$frecuencia' WHERE id='$id'";
        mysqli_query($conn, $query);
      }
      break;

      case 'eliminarTarea':
        if (isset($_POST['id'])) {
          $id = $_POST['id'];
      
          // Eliminar los registros relacionados en la tabla tareas_realizadas
          $query = "DELETE FROM tareas_realizadas WHERE tarea_id='$id'";
          mysqli_query($conn, $query);
      
          // Eliminar la tarea en sí
          $query = "DELETE FROM tareas WHERE id='$id'";
          mysqli_query($conn, $query);
        }
        break;

        case 'eliminarMiembro':
      if (isset($_POST['nombre'])) {
        $nombre = $_POST['nombre'];
        $query = "DELETE FROM familia WHERE nombre='$nombre'";
        mysqli_query($conn, $query);
      }
      break;
  }
}

// Redireccionar a la página principal
header("Location: ../index.php");
exit();
?>

