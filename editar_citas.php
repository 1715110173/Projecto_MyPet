<?php
	
	require('conexion1.php');
	
	$id_cita=$_GET['id_cita'];
	$fecha=$_GET['fecha'];
	$motivo=$_GET['motivo'];
	$hora=$_GET['hora'];
	$query="UPDATE citas SET fecha='$fecha', hora='$hora', motivo='$motivo' WHERE id_cita='$id_cita'";
	
	$mysqli->query($query);
	
?>


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
	<body>
		<form name="editar_citas.php" method="POST" action=" ">
		<table width="407" border="0" align="center">
	    <tr>
	  	<p><a href="agenda.php"><img src="images/atras.png" width="100" height="100" align="right"></a></p>
	    </tr>
	    </table>
	    <h1 class="deen" align="center">Modificar cita</h1>
	    <table width="58%" align="center">
	 	  <tr align="center" valign="middle">
		  <input type="hidden" name="id_cita" value="<?php echo $_GET['id_cita']; ?>">
		  <th width="322">
		  <h3 align="justify">Fecha</h3>		
		  <p align="justify">
		  <input type="text" name="fecha" size="100" value="<?php echo $_GET['fecha']; ?>" />
          </p>
		  <h3 align="justify">Hora</h3>					  
		  <p align="justify">
            <input type="text" name="hora" size="100" value="<?php echo $_GET['hora']; ?>" />
          </p>
		  <h3 align="justify">Motivo</h3>					  
		  <p align="justify">
		    <input type="text" name="motivo" size="100" value="<?php echo $_GET['motivo']; ?>" />     
		  <h3 align="center">
		    <input type="submit" name="Guardar" value="Guardar" />
		  </h3>                    
		  </th>
	    </tr>	
		</table>
		</table>
		</form>

	<footer>
      <p><CENTER><strong>2017 MyPet</strong><br>Elaborado por: <br>Ana Karen M.A. & Karla Samantha T.L.</CENTER></p>
  	</footer>     
		<div align="center">
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		</body>
    </div>
</html>	
