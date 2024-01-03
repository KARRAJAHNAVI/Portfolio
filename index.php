<?php
  session_start(); 

  // Redirect to login page if the user is not logged in
  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }

  // Logout logic
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karra Jahnavi - Portfolio</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        nav {
            display: flex;
            justify-content: center;
            background-color: #444;
            padding: 10px 0;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
            cursor: pointer;
        }

        section {
            padding: 50px 20px;
            text-align: center;
        }

        .about-section {
            background-color: #f5f5f5;
            border: 1px solid #ccc;
            border-radius: 8px;
            margin: 20px;
        }

        .about-section h2 {
            color: #333;
        }

        .about-section p {
            font-size: 18px;
            line-height: 1.6;
            color: #555;
            max-width: 800px;
            margin: 0 auto;
        }

        .project-section {
            background-color: #fff;
        }

        .project {
            border: 1px solid #ccc;
            border-radius: 8px;
            margin: 20px;
            padding: 20px;
            background-color: #f5f5f5;
        }

        .contact-section {
            background-color: #333;
            color: #fff;
        }

        .contact-form {
            max-width: 400px;
            margin: 0 auto;
        }

        .contact-form input,
        .contact-form textarea,
        .contact-form button {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            box-sizing: border-box;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #444;
            color: #fff;
        }
    </style>
</head>

<body>

    <header>
        <h1>Karra Jahnavi</h1>
        <p>Web Developer</p>
    </header>

    <nav>
        <a href="#hero">Home</a>
        <a href="#about">About</a>
        <a href="#projects">Projects</a>
        <a href="#contact">Contact</a>
    </nav>

    <section id="hero" class="hero-section">
        <h2>Welcome to My Portfolio</h2>
        <p>Showcasing my projects and skills</p>
    </section>

    <section id="about" class="about-section">
        <h2>About Me</h2>
        <p>Seeking a position in a company where I can launch my career and build a valuable skill set. To become a successful professional in the field of computer science and engineering by channelizing my technical knowledge and skills to ensure personal and professional growth and to contribute to the prosperity of the organization.</p>
    </section>

    <section id="projects" class="project-section">
        <h2>Projects</h2>
        <div class="project">
            <h3>Project 1: Crime Record Management System</h3>
            <p>The Crime Record Management System is a web application facilitating the filing of missing and regular complaints, as well as generating e-challans online. Developed with HTML, CSS, and JavaScript, it incorporates an Oracle database for secure and efficient data storage. This system improves the management and accessibility of crime-related information for law enforcement agencies.</p>
        </div>
        <div class="project">
            <h3>Project 2: E-commerce Web Application Using Load Balancer In AWS</h3>
            <p>In my E-commerce web application on AWS, I've integrated an Application Load Balancer for efficient traffic distribution across multiple instances. This ensures optimal performance and scalability, allowing the application to handle varying user loads seamlessly. Leveraging AWS infrastructure, the setup enhances reliability, responsiveness, and fault tolerance. The load balancer dynamically adjusts resources to meet demand fluctuations, providing a resilient and uninterrupted shopping experience for users.</p>
        </div>
    </section>

    <section id="contact" class="contact-section">
  <h2>Contact Me</h2>
  <div class="contact-form">
    <form method="post" action="index.php">
      
      
      <input type="text" placeholder="Your Name" required>
      <input type="email" name="email" placeholder="Your Email" required>
      <textarea name="message" placeholder="Your Message" required></textarea>
      <button type="submit" name="send_message">Send Message</button>
    </form>
  </div>
</section>


    <footer>
        <p>&copy; 2024 Karra Jahnavi</p>
    </footer>

</body>

</html>
