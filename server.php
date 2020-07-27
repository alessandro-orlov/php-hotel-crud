<?php
include "database.php";

$sql = "SELECT * FROM `stanze` ORDER BY `room_number` ASC";
$results = $conn->query($sql);

  if ($results && $results->num_rows > 0) {

    $rooms = [];

    // Put single row (that rappresents single room) in array ($rooms)
    while($row = $results->fetch_assoc()) {
      $rooms[] = $row;
    }

  } elseif ($results) {

    // 0 results
    $rooms = [];

    } else {
        echo "query error";
      }
$conn->close();

?>
