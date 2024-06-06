<?php
include ('connection.php');
session_start();

if (isset($_POST['submit'])) {
  $email = $conn->real_escape_string($_POST['email']);
  $password = $conn->real_escape_string($_POST['pass']);

  $sql = "SELECT email FROM user_student";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $firstEmail = $row['email'];

    if ($firstEmail) {
      echo "<script>window.location.href = 'dashboard.php';</script>";
      exit;
    } 
  } else {
    echo "<script>alert('Invalid Details');</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="./styles.css">
</head>

<body class="flex">
<h2>Log into your Account</h2>
<div class="container ">
    <div class="wrap flex ">

        <form action="login.php" class="flex gap" method="post">
            <h2>Login</h2>
            <input type="email" name="email" id="email" placeholder="Email" class="size">
            <input
                placeholder="Password"
                type="password" id="pass" name="pass" class="size">

            <button
                type="submit" class="size btn" name="submit">Login</button>
            <p>Don't have an Account?
                <a href="./register.php">Login</a>
            </p>

        </form>
    </div>

    <div class="bg"></div>

    <div class="right-center flex">
        <div class="wel flex">
            <h2>Welcome!</h2>
            <p>Your Class<br>Management.</p>
        </div>
    </div>

</div>


</body>
</html>
