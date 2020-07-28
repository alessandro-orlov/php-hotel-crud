<?php
include "../../database.php";

$room_id = $_POST['roomId'];
$room_number = $_POST['roomNumber'];
$room_floor = $_POST['roomFloor'];
$room_beds = $_POST['roomBeds'];


$sql = "UPDATE `stanze` SET `room_number` = $room_number, `floor` = $room_floor, `beds` = $room_beds, `updated_at` = NOW()  WHERE `id` = $room_id ";

$results = $conn->query($sql);

if ($results) {
  echo "<h1>Modifica effettuata</h1>";
  echo "<a href=" . $base_url . ">torna indietro</a> " ;
} else {
  echo "errore";
};

?>
