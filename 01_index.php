<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Anshul Sharma - Portfolio</title>
  <link rel="stylesheet" href="./01_index.css">
  <!-- Font Awesome for icons (optional) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
  <!-- Top Navigation Bar -->
  <header class="navbar">
    <div class="logo-container">
      <h1>Anshul Sharma</h1>
      <span class="subtitle">SOFTWARE ENGINEER INTERN</span>
    </div>
    
    <nav>
      <ul class="nav-links">
        <li><a href="./01_home.php" class="active"><i class="fas fa-home"></i> Home</a></li>
        <li><a href="./01_about.php"><i class="fas fa-user"></i> About</a></li>
        <li><a href="./01_education.php"><i class="fas fa-graduation-cap"></i> Education</a></li>
        <li><a href="./01_project.php"><i class="fas fa-code"></i> Projects</a></li>
        <li><a href="./01_experience.php"><i class="fas fa-briefcase"></i> Experience</a></li>
        <li><a href="./01_skills.php"><i class="fas fa-cogs"></i> Skills</a></li>
      </ul>
      
      <!-- Mobile menu button -->
      <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
    </nav>
  </header>

  <main>
    <!-- Your page content goes here -->
 
  <script>
    // Mobile menu functionality
const burger = document.querySelector('.burger');
const nav = document.querySelector('.nav-links');

burger.addEventListener('click', () => {
  // Toggle nav
  nav.classList.toggle('active');
  
  // Burger animation
  burger.classList.toggle('toggle');
});

// Close menu when clicking on a link (for mobile)
document.querySelectorAll('.nav-links a').forEach(link => {
  link.addEventListener('click', () => {
    nav.classList.remove('active');
    burger.classList.remove('toggle');
  });
});
  </script>
</body>
</html>