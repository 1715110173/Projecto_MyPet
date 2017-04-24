<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Agenda</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body style="background-color:#cce6ff;">
  <body>
  <div class="container-fluid">
  <div class="row">
  <div class="col-md-12">
  <div class="jumbotron">
  <div class="container text-center">    
  <img src="images/mypet.png" class="img-circle" alt="Cinque Terre" width="304" height="236">  
  </div>
  </div>
  <ul class="nav navbar-nav">
      <li><a href="index.php">DIRECTORIO</a></li>
      <li><a href="agenda.php">AGENDA</a></li>
      <form class="navbar-form navbar-left">
      <div class="form-group">
      </ul>
      </div>
      </div>
      </div>
      </nav>
    <h1>Citas Próximas</h1>
    <div class="table-responsive">
    <table class="table table-striped table-borde table-hover table-condensed">
      <thead>
        <tr>
          <th>Nombre del dueño</th>
          <th>Nombre de la mascota</th>
          <th>Tipo de Mascota</th>
          <th>Fecha</th>
          <th>Hora</th>
          <th>Motivo</th>
          <th>Crear diagnóstico</th>
          <th>Editar</th>
          <th>Eliminar</th>
          <th>Enviar mensaje</th>

        </tr>
      </thead>
    <tbody>
        <?php
          require('conexion1.php');
  
              $query="SELECT citas.id_cita, citas.fecha, citas.hora, citas.motivo, users.username, mascotas.tipo_mascota, mascotas.nombre, diagnostico.id_diagnostico, users.id from citas LEFT JOIN diagnostico ON (citas.id_cita=diagnostico.id_cita) inner join users ON (CITAS.id=users.id) inner join mascotas ON (mascotas.id=users.id);";
              $resultado=$mysqli->query($query);
                while($row=$resultado->fetch_assoc())
            {
                 ?>

             <tr>

              <td> <?php echo $row['username'];?> </td>

              <td>
                <?php echo $row['nombre'];?>
              </td>

              <td>
                <?php echo $row['tipo_mascota'];?>
              </td>

              <td>
                <?php echo $row['fecha'];?>
              </td>

              <td>
                <?php echo $row['hora'];?>
              </td>
              <td>
                <?php echo $row['motivo'];?>
              </td>

              <td>
                <a href="Crear_registro.php?id_diagnostico=<?php echo $row['id_diagnostico'];?>&id_cita=<?php echo $row['id_cita'];?>">Crear Diagnóstico</a>
              </td>

              <td>
                <a href="editar_citas.php?id_cita=<?php echo $row['id_cita'];?>&fecha=<?php echo $row['fecha'];?>&hora=<?php echo $row['hora'];?>&motivo=<?php echo $row['motivo'];?>">Editar</a>
              </td>

               <td>
                <a href="eliminar_cita.php?id_cita=<?php echo $row['id_cita'];?>">Eliminar</a>
              </td>
              <td>
                <a href="mensajes.php?id=<?php echo $row['id'];?>">Enviar mensaje</a>
              </td>

            </tr>
       <?php
                               
  }
              ?>
              
          
        </tbody>



    </table>
    </div>
    </table>
    </div>

  <footer>
      
      <p><CENTER><strong>2017 MyPet</strong><br>Elaborado por: <br>Ana Karen M.A. & Karla Samantha T.L.</CENTER></p>
  </footer>        

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>