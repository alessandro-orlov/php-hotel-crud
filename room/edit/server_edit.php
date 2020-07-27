<?php
include __DIR__ . "/../../database.php";

$room = $_GET['id'];

$sql = "SELECT * FROM `stanze` WHERE `id` = $room";
$results = $conn->query($sql);

  if ($results && $results->num_rows > 0) {

    $room = $results->fetch_assoc();

  } elseif ($results) {

    // 0 results
    $room;

    } else {
        echo "query error";
      }
$conn->close();

?>
