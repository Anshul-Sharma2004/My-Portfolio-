<?php include './01_index.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./01_skills.css">
</head>
<body>

<div class="main-container">
    <div class="content">
        <div class="card">
            <h2>Linux</h2>
            <ul>
                <li>LINUX COMMANDS <span class="skill-level">Advanced</span></li>
            </ul>
        </div>

        <div class="card">
            <h2>Frontend Technologies</h2>
            <ul>
                <li>HTML <span class="skill-level">Expert</span></li>
                <li>CSS <span class="skill-level">Expert</span></li>
                <li>JAVASCRIPT <span class="skill-level">Advanced</span></li>
                <li>BOOTSTRAP <span class="skill-level">Advanced</span></li>
                <li>AJAX <span class="skill-level">Intermediate</span></li>
            </ul>
        </div>

        <div class="card">
            <h2>Backend Technologies</h2>
            <ul>
                <li>PHP 8.4 <span class="skill-level">Expert</span></li>
                <li>LARAVEL 12 <span class="skill-level">Advanced</span></li>
                <li>C# <span class="skill-level">Intermediate</span></li>
                <li>ASP.NET MVC <span class="skill-level">Intermediate</span></li>
                <li>ASP.NET WEBAPP <span class="skill-level">Intermediate</span></li>
            </ul>
        </div>

        <div class="card">
            <h2>Database</h2>
            <ul>
                <li>MYSQL <span class="skill-level">Advanced</span></li>
            </ul>
        </div>

        <div class="card">
            <h2>Server</h2>
            <ul>
                <li>APACHE <span class="skill-level">Advanced</span></li>
            </ul>
        </div>

        <div class="card">
            <h2>REST API Tools</h2>
            <ul>
                <li>POSTMAN <span class="skill-level">Advanced</span></li>
            </ul>
        </div>

        <div class="card">
            <h2>Database Tools</h2>
            <ul>
                <li>MYSQL WORKBENCH <span class="skill-level">Advanced</span></li>
            </ul>
        </div>
    </div>
</div>

<script>    
    const cards = document.querySelectorAll('.card');
    cards.forEach(card => {
        card.addEventListener('click', () => {
            card.classList.toggle('expanded');
        });
    });
</script>

</body>
</html>