<?php
include ('connection.php');
session_start();

if (isset($_POST['submit'])) {
  $username = $_POST['name'];
  $password = password_hash($_POST['pass'], PASSWORD_DEFAULT);
  $email = $_POST['email'];
  $sql = "INSERT INTO user_student(username,password,email) VALUES('$username','$password','$email')";
  $result = $conn->query($sql);

  if ($result === true) {
    echo "<script>
                window.location.href = 'login.php';
              </script>";
  } else {
    echo "Error :" . $sql . "<br>" . $conn->error;
  }
  $conn->close();
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
    <h2>Register your Account</h2>
    <div class="container ">
     <div class="wrap flex ">

       <form action="register.php" class="flex gap" method="post">
        <h2>Register</h2>
        <input type="text" name="name" id="name" placeholder="Username" class="size">
        <input type="email" name="email" id="email" placeholder="Email" class="size">
        <input 
         placeholder="Password"
        type="password" id="pass" name="pass" class="size">

        <button 
        type="submit" class="size btn" name="submit">Register</button>
        <p>Already have an Account? 
          <a href="./login.php">Login</a>
        </p>

       </form>
     </div>

     <div class="bg"></div>

     <div class="right-center flex">
       <div class="wel flex">
        <h2>Welcome!</h2>
        <p>Lorem ipsum  <br>dolor sit amet.</p>
       </div>
     </div>

    </div>

  </body>
</html>
