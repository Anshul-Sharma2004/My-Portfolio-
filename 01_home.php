<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anshul Sharma - Software Engineer</title>
    <link rel="stylesheet" href="./01_home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>
    <!-- Navigation -->
    <header>
        <nav>
          <?php
          include "./01_index.php";
          ?>
          
        </nav>
    </header>

    <!-- Hero Section -->
    <main>
      <div>
                <section class="hero">
            <div class="hero-content">
                <h1>Hi, I'm <span class="typewriter" id="name"></span></h1>
                <h2>Software Engineer</h2>
                <p>A Software Engineer with over 6 months of experience specializing in JavaScript (ES6). Proicient in developing, testing, and
                  maintaining web applications using technologies such as PHP, Laravel,C#, ASP.NET MVC, ASP.NET WEBAPP, MySQL, HTML,
                  CSS, JavaScript, and Git. Proven expertise in building high-performance client code, developing scalable and testable
                  applications. Familiar with Agile methodologies, RESTful APIs, and database-driven solutions. Known for quick learning,
                  strong problem-solving skills, and the ability to collaborate effectively in team settings.
                  </p>
                
                <div class="cta-buttons">
                    <a href="./Anshul Resume.pdf" class="btn hire-me">My Resume</a>
                    <a href="#contact" class="btn lets-talk">Let's Talk</a>
                </div>
            </div>
            <div class="hero-image">
                <img src="./anshulprofilephoto.jpg" alt="Anshul Sharma">
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="contact-section">
            <h2>Get In Touch</h2>
            <ul class="contact-list">
                <li>
                    <i class="fa-brands fa-linkedin"></i>
                    <a href="https://www.linkedin.com/in/anshulsharma1911" target="_blank">LinkedIn</a>
                </li>
                <li>
                    <i class="fa-brands fa-github"></i>
                    <a href="https://github.com/Anshul-Sharma2004" target="_blank">GitHub</a>
                </li>
                <li>
                    <i class="fa-solid fa-phone"></i>
                    <span>+91 8307469661</span>
                </li>
                <li>
                    <i class="fa-solid fa-envelope"></i>
                    <a href="mailto:as5297174@gmail.com">as5297174@gmail.com</a>
                </li>
                <li>
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Nimoth, Haryana, India</span>
                </li>
            </ul>
        </section>
    </div>
  </main>



    <script>
        // Typewriter Effect
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
                setTimeout(typeEffect, 1000);
            } else if (index < 0) {
                isDeleting = false;
                setTimeout(typeEffect, 500);
            } else {
                setTimeout(typeEffect, isDeleting ? 80 : 150);
            }
        }

        typeEffect();

        // Mobile Menu Toggle
        const hamburger = document.querySelector('.hamburger');
        const navMenu = document.querySelector('.nav-menu');

        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            navMenu.classList.toggle('active');
        });

        document.querySelectorAll('.nav-menu a').forEach(link => {
            link.addEventListener('click', () => {
                hamburger.classList.remove('active');
                navMenu.classList.remove('active');
            });
        });
    </script>
</body>
</html>