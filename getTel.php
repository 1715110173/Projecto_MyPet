<?php
$mysqli = new mysqli("if0ck476y7axojpg.cbetxkdyhwsb.us-east-1.rds.amazonaws.com", "rgg7fbgz3jctck74", "iwn2fl6sfak5bzpd", " ep4wnz87ho4q6cps");
$sql_query = "SELECT telefono_clinica, telefono_emergencia, telefono_personal FROM veterinarios;";
$result = mysqli_query($mysqli,$sql_query);
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
  $rows[] = $r;
}
print json_encode($rows);
?>