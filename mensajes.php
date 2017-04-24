<?php 
  
  if (isset($_GET['mensaje'])) {
    require('conexion1.php');
  
    $mensaje=$_GET['mensaje']; 
    $id_usuario=$_GET['id'];
    $query=("INSERT INTO mensajes (mensaje,fecha,id) VALUES ('$mensaje', now(),'$id')");
  
    $resultado=$mysqli->query($query);
  }
  
  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Diagnostico</title>

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
    <p><a href="agenda.php"><img src="images/atras.png" width="100" height="100" align="right"></a></p>
    <h1 class="deen">Nuevo Mensaje</h1>
    <form  action=" " method="_GET">
      <div class="col-md-6">
       <form role="form">
          <div class="form-group">
          <input type="hidden" name="id"  id="id" value="<?php echo $_GET['id']; ?>" >
          <textarea name="mensaje" placeholder="Escriba su mensaje"  rows="6" cols="102" class="form-control" required></textarea>
          </div>
          <input type="submit" name="Guardar" id="boton">
          </div>
       </form>
      </div>
      <footer>
      
      <p><CENTER><strong>2017 MyPet</strong><br>Elaborado por: <br>Ana Karen M.A. & Karla Samantha T.L.</CENTER></p>
  </footer>     
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>

