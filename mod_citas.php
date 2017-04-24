<?php 
	
	require('conexion1.php');
	
	$id_cita=$_POST['id_cita'];
	$fecha=$_POST['fecha'];
	$hora=$_POST['hora'];
	$motivo=$_POST['motivo'];
	
	
	$query="UPDATE citas SET fecha='$fecha', hora='$hora', motivo='$motivo' WHERE id_cita='$id_cita'";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
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
       <li><a href="directorio.php">DIRECTORIO</a></li>
      <li><a href="agenda.php">AGENDA</a></li>
        <form class="navbar-form navbar-left">
        <div class="form-group">
      </ul>
        </div>
        </div>
        </div>
        </nav>
	
	<body>
		<center>
		  <table width="673" border="0">
		    <tr>
			    <th width="663"><?php 
				if($resultado>0){
				?></th>
		      </tr>
			  <tr>
			    <td><span class="dan">Producto Modificado</span></td>
		      </tr>
			  <tr>
			    <td><?php 	}else{ ?></td>
		      </tr>
			  <tr>
			    <td><a href="directorio.php"><img src="Imagenes/Index.png" alt="" width="100" height="100"></a></td>
		      </tr>
			  <tr>
			    <td><span class="dan">Error al Modificar Producto</span></td>
		      </tr>
			  <tr>
			    <td><?php	} ?></td>
		      </tr>
			  <tr>
			    <td><a href="directorio.php"><img src="Imagenes/Index.png" width="100" height="100"></a></td>
		      </tr>
		  </table>
	</center>
	<div align="center">
    <footer>
      
      <p><CENTER><strong>2017 MyPet</strong><br>Elaborado por: <br>Ana Karen M.A. & Karla Samantha T.L.</CENTER></p>
    </footer>     



		  <script src="js/jquery.js"></script>
		  <script src="js/bootstrap.min.js"></script>
		  </body>
    </div>
</html>
				
				