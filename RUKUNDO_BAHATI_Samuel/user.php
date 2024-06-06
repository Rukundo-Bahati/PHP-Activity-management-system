<?php
include ('connection.php');

// Create the SELECT SQL query
$sql2 = 'SELECT * FROM course';
$result = $conn->query($sql2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./dash.css">
    <title>Dashboard</title>
</head>
<body class="dash">
    <h2>All Courses</h2>
    <table>
        <tr>
            <th>Course Id</th>
            <th>Course Name</th>
            <th>Instructor</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["ID"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["instructor"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No courses found</td></tr>";
        }

        // Close the connection
        $conn->close();
        ?>
    </table>
</body>
</html>
