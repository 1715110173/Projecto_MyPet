 <?php
       $db_host = "if0ck476y7axojpg.cbetxkdyhwsb.us-east-1.rds.amazonaws.com"; // 
        $db_name = "ep4wnz87ho4q6cps"; //nombre de base de datos
        $db_user = "rgg7fbgz3jctck74"; //nombre de usuario
        $db_password = "iwn2fl6sfak5bzpd";  //contraseña 
    
      $connection = mysqli_connect('localhost', 'root', '');
    
     mysqli_select_db($connection, $db_name) or die("Error al seleccionar la base de datos:".mysqli_error());
    @mysqli_query("SET NAMES 'utf8'");
   $sql_query = "SELECT nombre, apellido_pat, apellido_mat, email, cedula FROM veterinarios";
    $result = mysqli_query($connection, $sql_query);
    $rows = array();
while($r = mysqli_fetch_assoc($result)) {
  $rows[] = $r;
}
print json_encode($rows);
?>