<?php
$conn = mysqli_connect("localhost", "viaceral_vcext", "hhuyContact0", "viaceral_extranet");

if (!$conn) {
    header("Location: /error.php?ide=1");
    exit;
}

// mysqli_close($conn);

?>