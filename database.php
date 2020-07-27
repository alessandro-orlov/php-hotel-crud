<?php
// collego env.php con i dati necessari per la connesione al database
include "env.php";


// Connect
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn && $conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>
