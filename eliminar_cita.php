<?php 
	
	require('conexion1.php');
	
	$id_cita=$_GET['id_cita'];
	
	$query="DELETE FROM citas WHERE id_cita='$id_cita'";
	
	$resultado=$mysqli->query($query);
	
?>


<html>
	<head>
		<title>Eliminar producto</title>
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
		<center>	
			
		<?php if($resultado>0){ ?>
		<h1 class="deen">Cita Eliminada</h1>
			<p>
			  <?php }else{ ?>
		    </p>
		<p><a href="agenda.php"><img src="images/mypet.png" alt="" width="100" height="100" align="right></a></p>
	    <h1 class="deen">Error al Eliminar Cita</h1>		
		<p>
		 <?php	} ?>
		</p>
		<p><a href="agenda.php"><img src="images/atras.png" width="100" height="100"></a></p>
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