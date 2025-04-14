<?php include './01_index.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills</title>
    <link rel="stylesheet" href="./01_skills.css">
</head>
<body>

<div class="main-container">
    <!-- This is your right side content section -->
    <div class="content">
        <div class="card">
            <h2>Linux </h2>
            <ul><li>LINUX COMMANDS</li></ul>
        </div>

        <div class="card">
            <h2>Frontend Technologies</h2>
            <ul>
                <li>HTML</li>
                <li>CSS</li>
                <li>JAVASCRIPT</li>
                <li>BOOTSTRAP</li>
                <li>AJAX</li>
            </ul>
        </div>

        <div class="card">
            <h2>Backend Technologies</h2>
            <ul>
                <li>PHP -> 8.4</li>
                <li>LARAVEL -> 12</li>
            </ul>
        </div>

        <div class="card">
            <h2>Database</h2>
            <ul><li>MYSQL</li></ul>
        </div>
        <div class="card">
            <h2>Server</h2>
            <ul><li>APACHE</li></ul>
        </div>
        <div class="card">
            <h2>Tools Used For REST API</h2>
            <ul><li>POSTMAN</li></ul>
        </div>
        <div class="card">
            <h2>Tools Used For Database</h2>
            <ul><li>MYSQL WORKBENCH</li></ul>
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
