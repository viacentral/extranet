<?php require_once("../core/dbconn.php");


$esnoticia = $conn->query("SELECT * FROM esnoticia WHERE esn_fecha ='". date('Y-m-d') ."'");

$fila = mysqli_fetch_row($esnoticia);
echo "<pre>";
print_r($fila);
echo "</pre>";


$estendencia = $conn->query("SELECT * FROM estendencia WHERE est_fecha ='". date('Y-m-d') ."'");

$fila = mysqli_fetch_row($estendencia);
echo "<pre>";
print_r($fila);
echo "</pre>";


$enfoco = $conn->query("SELECT * FROM enfoco WHERE enf_fecha ='". date('Y-m-d') ."'");

$fila = mysqli_fetch_row($enfoco);
echo "<pre>";
print_r($fila);
echo "</pre>";


$mercados = $conn->query("SELECT * FROM mercados WHERE mer_fecha ='". date('Y-m-d') ."'");

$fila = mysqli_fetch_row($mercados);
echo "<pre>";
print_r($fila);
echo "</pre>";

?>