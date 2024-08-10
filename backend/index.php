<!-- backend/index.php -->
<!DOCTYPE html>
<html>
<head>
    <title>MySQL Data Display</title>
</head>
<body>
    <h1>Data from MySQL Database</h1>
    <?php
    include 'db.php';

    $query = "SELECT * FROM my_table";
    $result = $mysqli->query($query);

    if ($result->num_rows > 0) {
        echo "<table border='1'><tr><th>ID</th><th>Name</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $mysqli->close();
    ?>
</body>
</html>
