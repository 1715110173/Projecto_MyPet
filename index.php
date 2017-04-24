<?php
	require('conexion1.php');
	
	$query="SELECT id_usuario, nombre_us, apellido_pat, apellido_mat, email FROM usuarios";
	
	$resultado=$mysqli->query($query);
	
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Directorio</title>

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
    	<li><a href="directorio.php">DIRECTORIO</a></li>
   		<li><a href="agenda.php">AGENDA</a></li>
        <form class="navbar-form navbar-right">
      	<div class="form-group">
       	</form>
    	</ul>
        </div>
        </div>
        </div>
        </nav>
        <h1>CLIENTES</h1>
        <div class="table-responsive">
 		<table class="table table-striped table-borde table-hover table-condensed">
    		<tr>		
			<thead>
				<tr>
					<td><b>Nombre</b></td>
					<td><b>Apellido Paterno</b></td>
					<td><b>Apellido Materno</b></td>
					<td><b>Email</b></td>
					<td></td>
					<td></td>
					
					
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
						<tr>

							<td> 
								<?php echo $row['nombre_us'];?>
							</td>

							<td>
								<?php echo $row['apellido_pat'];?>
							</td>

							<td>
								<?php echo $row['apellido_mat'];?>
							</td>

							<td>
								<?php echo $row['email'];?>
							</td>


						</tr>
					<?php } ?>
				</tbody>
			
			</table>
		
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		</body>
	</html>	
	
