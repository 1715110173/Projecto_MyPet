<?php
      $db_host = "if0ck476y7axojpg.cbetxkdyhwsb.us-east-1.rds.amazonaws.com"; 
      $db_name = "ep4wnz87ho4q6cps"; 
      $db_user = "rgg7fbgz3jctck74"; 
      $db_password = "iwn2fl6sfak5bzpd"; 
       $connection = mysqli_connect($db_host, $db_user, $db_password) or die("Connection Error: " . mysqli_error());
        mysqli_select_db($connection, $db_name) or die("Error al seleccionar la base de datos:".mysqli_error());
          @mysqli_query("SET NAMES 'utf8'");

    $sql_query = "SELECT * FROM diagnostico";
    $result = mysqli_query($connection, $sql_query);
    $rows = array();
while($r = mysqli_fetch_assoc($result)) {
  $rows[] = $r;
}
print json_encode($rows);
?>
