<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOGBOOK MS</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f5f5f5;
    }

    header, footer {
      background-color:  #080124;
      box-shadow: 0 0 13px #0ef;
      color: #fff;
      padding: 10px 20px;
    }

    nav {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    nav ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
    }

    nav ul li {
      display: inline;
      margin-right: 20px;
      font-size: 18px;
      cursor: pointer;
    }

     ul li a {
     text-decoration: none;
     color: #fff;
    }

    main {
 

    }

    .left {
      color: #fff;
      font-size: 2.2rem;
    }

    .home {
      display: flex;
      padding: 20px;
      justify-content: space-between;
      align-items: center;
      height: 100vh;
      background-image: url(./images/bg.jpg);
      background-attachment: fixed;
      background-repeat: no-repeat;
      background-position: cover;
      background-size: cover;
    }

    .about {
      background-color: #fff;
      padding: 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      margin-top: 20px;
      height: 50vh;
    }
    .features {
      background: #080124;
      padding: 20px;
      height: 70vh;
      display: grid;
      grid-template-columns: repeat(3,1fr);
      gap: 1rem;
    }

    .feature {
      background-color: #fff;
      padding: 20px;
      margin-top: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      height: max-content;
    }

    .feature h3 {
      margin-bottom: 10px;
    }

   .btn {
    border: 1px solid white;
    padding: 0.3rem;
    border-radius : 5px;
    color: #fff;
    background: blue;
    text-decoration: none;
    font-size: 17px;
   }

    footer nav ul {
      text-align: center;
    }

    footer nav ul li {
      margin-right: 10px;
    }
    @media screen and (max-width: 768px) {
      .features {
        grid-template-columns: repeat(2,1fr);
      }
      .about, .features {
        height: 100vh;
      }
    }

    @media screen and (max-width: 468px) {
       .features {
        grid-template-columns: repeat(1,1fr);
       }
    }
  </style>
</head>
<body>
  <header>
    <nav>
      <h2>LOGBOOK MS</h2>
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#features">Features</a></li>
        <li><a href="#footer">Services</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <section class="home" id="home"> 
      <div class="left">
        <h2>Student Logbook System</h2>
        <p>Manage your activities by creating, updating, reading, and deleting them.</p>
        <a href="./login.php" class="btn">Get started</a>
      </div>
      <div class="right"></div>
    </section>
    <section class="about" id="about">
      <h2>About Us</h2>
      <h4>With our Logbook Management System, you can create dynamic activities, upload and share resources, facilitate discussions, assess student progress, and much more, all from one centralized location. Say goodbye to paperwork, confusion, and inefficiency, and say hello to a new era of teaching and learning.</h4>
      <h4>Welcome to our Logbook Management System! We are dedicated to revolutionizing the way education is managed and delivered, offering an innovative platform designed to streamline the entire learning process.

Our mission is simple: to empower educators and learners alike by providing a comprehensive suite of tools and resources that make teaching and learning more efficient, effective, and engaging. Whether you're an instructor looking to organize your activities, assignments, and grades, or a student seeking a seamless learning experience, our platform has you covered.</h4>
    </section>

    <section class="features" id="features">
      <div class="feature">
        <div class="upper">
          <h3>Create activity</h3>
        </div>
        <div class="lower">
          <p>Creating activities to be added in the database. At the heart of our system is a commitment to accessibility, flexibility, and user-friendliness.</p>
        </div>
      </div>
      <div class="feature">
        <div class="upper">
          <h3>Update activity</h3>
        </div>
        <div class="lower">
          <p>Updating an activity to be added in the database. At the heart of our system is a commitment to accessibility, flexibility, and user-friendliness.</p>
        </div>
      </div>
      <div class="feature">
        <div class="upper">
          <h3>Delete activity</h3>
        </div>
        <div class="lower">
          <p>Deleting an activity to be added in the database. At the heart of our system is a commitment to accessibility, flexibility, and user-friendliness.</p>
        </div>
      </div>
      <div class="feature">
        <div class="upper">
          <h3>All activities</h3>
        </div>
        <div class="lower">
          <p>All activities  in the database. At the heart of our system is a commitment to accessibility, flexibility, and user-friendliness.</p>
        </div>
      </div>
      <div class="feature">
        <div class="upper">
          <h3>Time of creation</h3>
        </div>
        <div class="lower">
          <p>An activity  to be added in the database. At the heart of our system is a commitment to accessibility, flexibility, and user-friendliness.</p>
        </div>
      </div>
      <div class="feature">
        <div class="upper">
          <h3>Accomplishments</h3>
        </div>
        <div class="lower">
          <p>Accomplishments to be added in the database. At the heart of our system is a commitment to accessibility, flexibility, and user-friendliness.</p>
        </div>

      </div>  
    </section>

  </main>
  <footer id="footer">
    <nav>
      <h2>LOGBOOK MS</h2>
      <ul>
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#features">Features</a></li>
        <li><a href="#services">Services</a></li>
      </ul>
    </nav>
  </footer>
</body>
</html>
