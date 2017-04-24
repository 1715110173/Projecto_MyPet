<?php 
  if(isset($_GET['especificar']))
  {
    require('conexion1.php');
  
    $especificar=$_GET['especificar'];

    if ($_GET['id']=='') {
      $id_cita=$_GET['id_cita'];
      $query=("INSERT INTO diagnostico (especificar, id_cita) VALUES ('$especificar','$id_cita')");
    }else{
      $id_diagnostico=$_GET['id'];
      $id_cita=$_GET['id_cita'];
      $query=("UPDATE diagnostico SET especificar=$especificar WHERE id_diagnostico=$id_diagnostico and id_cita=$id_cita");
    }
  
    
  
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
    </form>
    </nav>
    <p><a href="agenda.php"><img src="images/atras.png" alt="" width="100" height="100" align="right"></a></p>
    <h1>Diagnostico</h1>
    <form  action=" " method="_GET">
      <div class="col-md-6">
       <form role="form">
       <div class="form-group">
       <input type="hidden" name="id" id="id" value="<?php echo $_GET['id_diagnostico']; ?>" >
       <input type="hidden" name="id_cita" id="id_cita" value="<?php echo $_GET['id_cita']; ?>" >
       <textarea name="especificar" placeholder="Escriba su Diagnostico" rows="6" cols="102" class="form-control" required></textarea>
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

