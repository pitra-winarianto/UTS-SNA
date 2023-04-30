<!DOCTYPE html>
<html>
<head>
    <title>Redlock</title>
</head>
<body>
    <h1>Staff</h1>

    <?php
    // Create a new MySQL connection
    $mysqli = new mysqli("172.23.0.2", "root", "root", "Redlock");

    // Check if the connection was successful
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    }

    // Query the database for all users
    $result = $mysqli->query("SELECT * FROM users");

    // Loop through the results and display each user
    while ($row = $result->fetch_assoc()) {
        echo "<p>ID: " . $row["ID"] . "<br>";
        echo "Nama: " . $row["Nama"] . "<br>";
        echo "Alamat: " . $row["Alamat"] . "<br>";
        echo "Jabatan: " . $row["Jabatan"] . "</p>";
    }

    // Close the database connection
    $mysqli->close();
    ?>
</body>
</html>
