<?php require_once("../core/dbconn.php");

if($dataset = $conn->query("SELECT * FROM mae_usuarios WHERE usu_correo = '". $_POST['email'] ."' AND usu_password = '". $_POST['password'] ."'")) {
    if($dataset->num_rows>0) {
    	header("Location: ../dashboard.php");
    } else {
    	header("Location: ../index.php");
    }
    $dataset->close();
}

?>