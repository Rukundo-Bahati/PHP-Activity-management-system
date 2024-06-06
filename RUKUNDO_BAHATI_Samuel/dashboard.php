<?php
include ('connection.php');
// session_start();
// if (strlen($_SESSION['srsaid'] == 0)) {
//     header('location:logout.php');
//   }

// Handle form submissions
if (isset($_POST['submit'])) {
    $start = $_POST['start'];
    $end = $_POST['end'];
    $days = $_POST['days'];
    $week = $_POST['week'];
    $description = $_POST['description'];
    $hours = $_POST['hour'];

    // Create the INSERT SQL query
    $sql1 = "INSERT INTO  logbook_entries(entry_date,entry_time,days,week,activity_description,working_hour) VALUES ('$start', '$end', '$days', '$week', '$description', '$hours')";
    $conn->query($sql1);
}

if (isset($_POST['delete'])) {
    $id = $_POST['activity_id'];

    // Create the DELETE SQL query
    $sql3 = "DELETE FROM logbook_entries WHERE id=$id";

    // Execute the DELETE query
    if ($conn->query($sql3) === TRUE) {
        echo "<script>alert('Activity deleted successfully')</script>";
    } else {
        echo "Error: " . $sql3 . "<br>" . $conn->error;
    }
}

if (isset($_POST['update'])) {
    $id = $_POST['activity_id'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $days = $_POST['days'];
    $week = $_POST['week'];
    $description = $_POST['description'];
    $hours = $_POST['hour'];

    // Create the UPDATE SQL query
    $sql4 = "UPDATE logbook_entries SET entry_date='$start', entry_time='$end', days='$days', week=$week, activity_description='$description', working_hour='$hours' WHERE id=$id";

    // Execute the UPDATE query
    if ($conn->query($sql4) === TRUE) {
        echo "<script>alert('Activity Updated successfully')</script>";
    } else {
        echo "Error: " . $sql4 . "<br>" . $conn->error;
    }
}

// Create the SELECT SQL query
$sql2 = 'SELECT * FROM logbook_entries';
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
    <div class="form2">
        <h3>Add An Activity</h3>
        <form action="dashboard.php" method="post">
            <input type="text" name="start" placeholder="Starting Date">
            <input type="text" name="end" placeholder="Ending Date">
            <input type="text" name="days" placeholder="Days">
            <input type="text" name="week" placeholder="Week">
            <input type="text" name="description" placeholder="Description">
            <input type="text" name="hour" placeholder="Working Hours">
            <button type="submit" name="submit">Add</button>
        </form>
    </div>

    <table>
        <tr>
            <th>Activity No.</th>
            <th>Starting Date</th>
            <th>Ending Date</th>
            <th>Days</th>
            <th>Week</th>
            <th>Description</th>
            <th>Hours</th>
            <th>Creation Time</th>
            <th></th>
            <th></th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["entry_date"] . "</td>";
                echo "<td>" . $row["entry_time"] . "</td>";
                echo "<td>" . $row["days"] . "</td>";
                echo "<td>" . $row["week"] . "</td>";
                echo "<td>" . $row["activity_description"] . "</td>";
                echo "<td>" . $row["working_hour"] . "</td>";
                echo "<td>" . $row["created_at"] . "</td>";
                echo "<td><button onclick='editActivity({
                    id: " . $row["id"] . ",
                    entry_date: \"" . $row["entry_date"] . "\",
                    entry_time: \"" . $row["entry_time"] . "\", 
                    days: \"" . $row["days"] . "\",
                    week: \"" . $row["week"] . "\",
                    activity_description: \"" . $row["activity_description"] . "\",
                    working_hour: \"" . $row["working_hour"] . "\"
                })'>Edit</button></td>";
                

                echo "<td>
                        <form action='dashboard.php' method='post'>
                            <input type='hidden' name='activity_id' value='" . $row["id"] . "'>
                            <button type='submit' name='delete' class='delete'>Delete</button>
                        </form>
                      </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No Activities found</td></tr>";
        }

        // Close the connection
        $conn->close();
        ?>
    </table>
    <!-- Update Form (hidden by default) -->
    <div class="form2" id="updateForm" style="display:none;">
        <h3>Update Activity</h3>
        <form action="dashboard.php" method="post">
            <input type="hidden" name="activity_id" id="updateActivityId">
            <input type="text" id="start" name="start" placeholder="Starting Date">
            <input type="text" id="end" name="end" placeholder="Ending Date">
            <input type="text" id="day" name="days" placeholder="Days">
            <input type="text" id="week" name="week" placeholder="Week">
            <input type="text" id="description" name="description" placeholder="Description">
            <input type="text" id="hour" name="hour" placeholder="Working Hours">
            <button type="submit" name="update">Update</button>
        </form>
    </div>

    <script>
function editActivity(data) {
    document.getElementById('updateActivityId').value = data.id;
    document.getElementById('start').value = data.entry_date;
    document.getElementById('end').value = data.entry_time;
    document.getElementById('day').value = data.days;
    document.getElementById('week').value = data.week;
    document.getElementById('description').value = data.activity_description;
    document.getElementById('hour').value = data.working_hour;
    document.getElementById('updateForm').style.display = 'block';
}


    </script>
</body>
</html>
