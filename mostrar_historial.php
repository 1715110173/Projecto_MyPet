<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Citas</title>
    
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
        <form class="navbar-form navbar-right">
    	</ul>
        </div>
        </div>
        </div>
        </nav>
        <div class="table-responsive">
        <p><a href="index.php"><img src="images/atras.png" width="100" height="100" align="right"></a></p>
        <h1 class="deen">Historial</h1>
        <div class="table-responsive">
 		<table class="table table-striped table-borde table-hover table-condensed">	
			 <thead>
         <tr>
          <th>Nombre de la mascota</th>
          <th>Tipo de Mascota</th>
          <th>Fecha</th>
          <th>Hora</th>
          <th>Motivo</th>
          <th>Diagnostico</th>

        </tr>
        </thead>
        <tbody>
          <?php
            require('conexion1.php');
  				$id=$_REQUEST["id"];
                 $query="SELECT * from citas, users, mascotas, diagnostico  where citas.id=users.id AND mascotas.id=users.id AND citas.id_cita=diagnostico.id_cita AND users.id='$id'";
                  $resultado=$mysqli->query($query);
                     while($row=$resultado->fetch_assoc())
            {

            	?>

            	<tr>  
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
                <?php echo $row['especificar'];?>
              </td>
              </tr>
            	   <?php   



            }
                 ?>

		</tbody>
		</table>
		</div>
    <footer>
      
      <p><CENTER><strong>2017 MyPet</strong><br>Elaborado por: <br>Ana Karen M.A. & Karla Samantha T.L.</CENTER></p>
   </footer>     
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		</body>
	</html>	
	
