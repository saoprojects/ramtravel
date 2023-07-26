<?php require_once('php/conexion.php'); ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>R.A.M TRAVELS</title>
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/estilos.css">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <header class="header">
    <div class="contenedor">
      <div class="barra">
        <a class="logo" href="index.php">
         
          <h1 class="logo__nombre no-margin centrar-texto">R.A.M &nbsp;<span class="logo__bold">TRAVEL</span></h1>
        </a>
       <nav class="navegacion">
                    <a href="index.php" class="navegacion__enlace">Inicio</a>
                    <a href="sobre-nosotros.html" class="navegacion__enlace">Sobre Nosotros</a>
                    <a href="destinos.html" class="navegacion__enlace">Destinos</a>
                    <a href="blog.html" class="navegacion__enlace">Blog</a> 
                   
                    <a href=""><svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-brand-facebook" width="30" height="30"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                        </svg></a>

                    <a href=""><svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-brand-youtube" width="30" height="30"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 5m0 4a4 4 0 0 1 4 -4h10a4 4 0 0 1 4 4v6a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4z" />
                            <path d="M10 9l5 3l-5 3z" />
                        </svg></a>

                    <a href=""><svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-brand-instagram" width="30" height="30"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
                            <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                            <path d="M16.5 7.5l0 .01" />
                        </svg></a>
                </nav>
      </div>
    </div>

    <div class="header__texto">
      <h1>Unlimited Travels</h1>
      <h2 class="no-margin">Persigue tus sueños... ¡Por todo el mundo!</h2>
      
    </div><br><br><br><br>
    <div class="wave" style="height: 20rem; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                    style="height: 100%; width: 100%;">
                    <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                        style="stroke: none; fill: #fff;"></path>
                </svg></div>
  </header>
  
 
  <div class="contenedor contenido-principal2">  
  <article class="entrada">
            <div class="entrada__imagen">
                <div class="entrada__contenido">
              
                  <h4>Vuelos realizados:</h4>
                  <img loading="lazy" src="https://1.bp.blogspot.com/-IIyS9yqDv0Q/XYyWvpqgFGI/AAAAAAAAAOY/LjaOVnZK40EG4Xf2Uhf39qthzLDA6a36QCLcBGAsYHQ/s1600/metas%2Bsmart.png" alt="imagen blog">
                    <table>
                      <thead>
                        <tr>
                          <th>Destino</th>
                          <th>Personal</th>
                          <th>Fecha Vuelo</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $query = "SELECT tareas.tarea, familia.nombre AS miembro, tareas_realizadas.fecha_asignacion, tareas_realizadas.fecha_finalizacion FROM tareas_realizadas
                                INNER JOIN tareas ON tareas.id = tareas_realizadas.tarea_id
                                INNER JOIN familia ON familia.id = tareas_realizadas.miembro_id";
                        $result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_assoc($result)) {
                          echo "<tr>";
                          echo "<td>" . $row['tarea'] . "</td>";
                          echo "<td>" . $row['miembro'] . "</td>";
                          echo "<td>" . $row['fecha_asignacion'] . "</td>";
                        //echo "<td>" . $row['fecha_finalizacion'] . "</td>";
                          echo "</tr>";
                        }
                        ?>
                      </tbody>
                    </table>
                </div>
            </div>
        </article>

  </div>
  <div class="contenedor contenido-principal">   
   
    <article class="entrada">
        <div class="entrada__imagen">
          <div class="entrada__contenido">  
            <h4>Ingresar Vuelo:</h4>
            <img loading="lazy" src="https://crehana-public-catalog.imgix.net/images/resources/images/bd9821fa/f5aa3e1e.jpg?auto=format&w=718&h=404&dpr=2&q=50&fit=crop" alt="imagen blog">
              <form action="php/procesar.php" method="POST">
                <input type="hidden" name="action" value="agregarTarea">
                <input type="text" name="tarea" placeholder="Ingrese destino">
                <select name="frecuencia">
                  <option value="diaria">Diario</option>
                  <option value="semanal">Semanal</option>
                </select>
                <button type="submit">Agregar Vuelo</button>
              </form>
            </div>
        </div>
      </article>

      <article class="entrada">
          <div class="entrada__imagen">
            <div class="entrada__contenido"> 
              <h4>Personal:</h4>
              <img loading="lazy" src="https://static.vecteezy.com/system/resources/previews/023/355/829/non_2x/family-cleaning-home-children-helping-parents-with-housework-father-and-mother-with-kids-dusting-and-vacuuming-floor-illustration-vector.jpg" alt="imagen blog">
              <form action="php/procesar.php" method="POST">
                <input type="hidden" name="action" value="agregarMiembro">
                <input type="text" name="nombre" placeholder="Ingrese nombre">
                <button type="submit">Agregar Personal</button>
              </form>
            </div>
          </div>
      </article>

    <article class="entrada">
            <div class="entrada__imagen">
                <div class="entrada__contenido">
                <h4>Eliminar Vuelo:</h4>
                
                <img loading="lazy" src="https://crehana-public-catalog.imgix.net/images/resources/images/8cabcc73/c3b8267a.jpg?auto=format&w=718&h=404&dpr=2&q=50&fit=crop" alt="imagen blog">
                  <form action="php/procesar.php" method="POST">
                    <input type="hidden" name="action" value="eliminarTarea">
                    <label for="eliminar-tarea-id">ID Vuelo:</label>
                    <input type="text" name="id" id="eliminar-tarea-id" placeholder="Ingrese ID">
                    
                    <button type="submit">Eliminar Vuelo</button>
                  </form>
                </div>
            </div>
        </article>

        <!-- <article class="entrada">
            <div class="entrada__imagen">
                <div class="entrada__contenido">
                
                  <h4>Editar Tarea:</h4>
                  <img loading="lazy" src="https://crehana-public-catalog.imgix.net/images/resources/images/0c876375/0977d7fc.jpg?auto=format&w=718&h=404&dpr=2&q=50&fit=crop" alt="imagen blog">
                    <form action="php/procesar.php" method="POST">
                      <input type="hidden" name="action" value="editarTarea">
                      <label for="editar-tarea-id">ID de la Tarea:</label>
                      <input type="text" name="id" id="editar-tarea-id" placeholder="Ingrese el ID de la tarea"></br>
                      <label for="editar-tarea-nombre">Nombre de la Tarea:</label>
                      <input type="text" name="tarea" id="editar-tarea-nombre" placeholder="Ingrese el nombre de la tarea">
                      <label for="editar-tarea-frecuencia">Frecuencia:</label>
                      <select name="frecuencia" id="editar-tarea-frecuencia">
                        <option value="diaria">Diaria</option>
                        <option value="semanal">Semanal</option>
                      </select>
                      <button type="submit">Editar Tarea</button>
                    </form>
                </div>
            </div>
        </article> -->

        <article class="entrada">
            <div class="entrada__imagen">
                <div class="entrada__contenido">
               
                  <h4>Eliminar Personal:</h4>
                  <img loading="lazy" src="https://crehana-public-catalog.imgix.net/images/resources/images/5dc28379/51796b14.jpg?auto=format&w=718&h=404&dpr=2&q=50&fit=crop" alt="imagen blog">
                    <form action="php/procesar.php" method="POST">
                      <input type="hidden" name="action" value="eliminarMiembro">
                      <label for="eliminar-miembro-nombre">Nombre:</label>
                      <input type="text" name="nombre" id="eliminar-miembro-nombre" placeholder="Ingrese el nombre">
                      <button type="submit">Eliminar</button>
                    </form>
                </div>
            </div>
        </article>

       
        
        
      </div>
        

    
      <div class="contenedor contenido-principal contenido-principal2">
        <article class="entrada">
            <div class="entrada__imagen">
                <div class="entrada__contenido">
                <h2>Tabla de Vuelos</h2>
                  <form action="php/procesar.php" method="POST">
                    <input type="hidden" name="action" value="marcarTareasRealizadas">
                    <table>
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Destino</th>
                          <?php
                          $query = "SELECT * FROM familia";
                          $result = mysqli_query($conn, $query);
                          while ($row = mysqli_fetch_assoc($result)) {
                            echo "<th>" . $row['nombre'] . "</th>";
                          }
                          ?>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $query = "SELECT * FROM tareas";
                        $result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_assoc($result)) {
                          echo "<tr>";
                          echo "<td>" . $row['id'] . "</td>"; // Muestra el ID de la tarea
                          echo "<td>" . $row['tarea'] . "</td>";
                          $tarea_id = $row['id'];
                          $query2 = "SELECT * FROM familia";
                          $result2 = mysqli_query($conn, $query2);
                          while ($row2 = mysqli_fetch_assoc($result2)) {
                            $miembro_id = $row2['id'];
                            echo "<td>";
                            echo "<input type='checkbox' name='tarea_miembro[]' value='$tarea_id-$miembro_id'>";
                            echo "</td>";
                          }
                          echo "</tr>";
                        }
                        ?>
                      </tbody>
                    </table></br>
                    <button type="submit" class="boton boton--primario">Marcar vuelo realizado</button>
                  </form>
              </div>
            </div>
        </article>
      </div>

      <footer class="footer">
        <div class="contenedor">
            <div class="barra">
                <a class="logo" href="index.html">
                <img src="img/logo.png" alt="">
                </a>
                <div class="content-foo">
                    <h4>Descubre nuestras apps</h4>
                    <figure>
                        <a href="#"><img src="https://res.cloudinary.com/lastminute-contenthub/s--8LwGqFAF--/c_limit,h_40,w_135/f_auto/q_auto:eco/v1/DAM/Artwork/Other/Pink%20People/app-google"></a>
                    </figure>
                    <figure>
                        <a href="#"><img src="https://res.cloudinary.com/lastminute-contenthub/s--6YRSp2fl--/c_limit,h_40,w_120/f_auto/q_auto:eco/v1/DAM/Artwork/Other/Pink%20People/app-apple"></a>
                     </figure>
                     
                   
                </div>
                
                
                <nav class="navegacion">
                  <a href="index.php" class="navegacion__enlace">Inicio</a>
                    <a href="contacto.html" class="navegacion__enlace">Sobre Nosotros</a>
                    <a href="contacto.html" class="navegacion__enlace">Destinos</a>
                    <a href="contacto.html" class="navegacion__enlace">Blog</a>
                    
                    <a href=""><svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-brand-facebook" width="30" height="30"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                        </svg></a>

                    <a href=""><svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-brand-youtube" width="30" height="30"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 5m0 4a4 4 0 0 1 4 -4h10a4 4 0 0 1 4 4v6a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4z" />
                            <path d="M10 9l5 3l-5 3z" />
                        </svg></a>

                    <a href=""><svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-brand-instagram" width="30" height="30"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
                            <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                            <path d="M16.5 7.5l0 .01" />
                        </svg></a>
                </nav>
            </div>
        </div>
        
      </footer>


</body>
</html>