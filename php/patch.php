<?php
$mysqli = new mysqli("172.23.0.2", "root", "root", "Redlock");
// untuk membuat koneksi dengan database mysql


if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}
// Untuk mengecek apakah koneksi error atau tidak


$sql = "SELECT COUNT(*) AS total FROM users";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "Total Users: " . $row["total"];
  }
} else {
  echo "0 results";
}

$mysqli->close();
?>
