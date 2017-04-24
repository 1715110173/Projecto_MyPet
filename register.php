<?php

require("config.inc.php");

if (!empty($_POST)) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        
        // creamos el JSON
        $response["success"] = 0;
        $response["message"] = "Por favor ingrese el usuario y el password";
        
        die(json_encode($response));
    }
    
    $query        = " SELECT 1 FROM users WHERE username = :user";
    
    $query_params = array(
        ':user' => $_POST['username']
    );
    
    try {
        $stmt   = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch (PDOException $ex) {
        
        $response["success"] = 0;
        $response["message"] = "Por favor, vuelve a intentarlo";
        die(json_encode($response));
    }
    
    $row = $stmt->fetch();
    if ($row) {
        
        $response["success"] = 0;
        $response["message"] = "Lo siento, el usuario ya existe";
        die(json_encode($response));
    }
    
    $query = "INSERT INTO users ( username, password ) VALUES ( :user, :pass ) ";
    
    $query_params = array(
        ':user' => $_POST['username'],
        ':pass' => $_POST['password']
    );
    
    try {
        $stmt   = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch (PDOException $ex) {
        
        $response["success"] = 0;
        $response["message"] = "Por favor vuelve a intentarlo";
        die(json_encode($response));
    }
    $response["success"] = 1;
    $response["message"] = "El usuario se ha agregado correctamente";
    echo json_encode($response);
    
} else {
?>
	<h1>Register</h1> 
	<form action="register.php" method="post"> 
	    Username:<br /> 
	    <input type="text" name="username" value="" /> 
	    <br /><br /> 
	    Password:<br /> 
	    <input type="password" name="password" value="" /> 
	    <br /><br /> 
	    <input type="submit" value="Register New User" /> 
	</form>
	<?php
}

?>
