<?php
require_once('conexion.php');

if (isset($_GET['id'])) {
  $tarea_id = $_GET['id'];

  // Consultar la tarea correspondiente en la base de datos
  $query = "SELECT * FROM tareas WHERE id = '$tarea_id'";
  $result = mysqli_query($conn, $query);
  $tarea = mysqli_fetch_assoc($result);
}
?>

<!-- Mostrar el formulario con los datos de la tarea -->
<form action="procesar.php?action=actualizarTarea" method="POST">
  <input type="hidden" name="tarea_id" value="<?php echo $tarea['id']; ?>">
  <input type="text" name="tarea" value="<?php echo $tarea['tarea']; ?>">
  <select name="frecuencia">
    <option value="diaria" <?php if ($tarea['frecuencia'] == 'diaria') echo 'selected'; ?>>Diaria</option>
    <option value="semanal" <?php if ($tarea['frecuencia'] == 'semanal') echo 'selected'; ?>>Semanal</option>
  </select>
  <button type="submit">Actualizar Tarea</button>
</form>
