<?php  
include './01_index.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./01_home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    
</head>

<body>
    
    <!-- Main Content -->
<div class="main-content">
  <div class="hero">
    <div class="hero-text">
      <h1>Hello, I'm <b><b class="typewriter" id="name" style="color: red;"></b></b></h1>
      <h2>SOFTWARE ENGINEER</h2>
      <h4>
        <p>I'm a passionate <b>software engineer</b> and software enthusiast based in India. I love building clean, modern, and user-friendly websites using HTML, MySQL, and PHP. Welcome to my personal portfolio website.</p>
      </h4>
      <a href="./Anshul Resume.pdf" class="btn" name="resume">My Resume</a>
    </div>

    <div class="image-container">
      <img src="ansPhoto.png" alt="Anshul Sharma" class="profile-pic-3d">
    </div>
  </div>


  <!-- Contact Section -->
  <div class="contact-section">
  <h2>Contact Me</h2>
  <ul class="contact-list">
    <li>
      <i class="fa-brands fa-linkedin"></i>
      <a href="https://www.linkedin.com/in/anshulsharma1911" target="_blank"><b>LinkedIn</b></a>
    </li>
    <li>
      <i class="fa-solid fa-phone"></i>
      <b>+91 8307469661</b>
    </li>
    <li>
      <i class="fa-solid fa-envelope"></i>
      <a href="mailto:as5297174@gmail.com"><b>as5297174@gmail.com</b></a>
    </li>
    <li>
      <i class="fa-solid fa-location-dot"></i>
      <b>Nimoth, Haryana, India</b>
    </li>
  </ul>
</div>


</div>


<!-- Add this just before closing </body> tag -->

<script >
  const nameElement = document.getElementById("name");
  const text = "Anshul Sharma";
  let index = 0;
  let isDeleting = false;

  function typeEffect() {
    if (isDeleting) {
      nameElement.textContent = text.substring(0, index--);
    } else {
      nameElement.textContent = text.substring(0, index++);
    }

    if (index > text.length) {
      isDeleting = true;
      setTimeout(typeEffect, 1000); // pause before deleting
    } else if (index < 0) {
      isDeleting = false;
      setTimeout(typeEffect, 500); // pause before typing again
    } else {
      setTimeout(typeEffect, isDeleting ? 80 : 150);
    }
  }

  typeEffect();


</script>
</body>
</html>