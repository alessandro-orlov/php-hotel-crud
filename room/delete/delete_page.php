<?php
include "../../database.php";

$room_id = $_POST['id'];

$sql = "DELETE FROM `stanze` WHERE `id` = $room_id ";
$results = $conn->query($sql);

if ($results) {
  echo "<h1>Stanza Eliminata</h1>";
  echo "<a href=" . $base_url . ">torna indietro</a> " ;
} else {
  echo "errore";
};

?>
