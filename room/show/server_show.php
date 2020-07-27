<?php
include __DIR__ . "/../../database.php";

$room = $_GET['id'];
// Connect
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn && $conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `stanze` WHERE `id` = $room";
$results = $conn->query($sql);

  if ($results && $results->num_rows > 0) {

    $room_detail = [];

    // Put single row (that rappresents single room) in array ($rooms)
    while($row = $results->fetch_assoc()) {
      $room_detail[] = $row;
    }

  } elseif ($results) {

    // 0 results
    $room_detail = [];

    } else {
        echo "query error";
      }
$conn->close();

?>
