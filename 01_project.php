<?php 
include './01_index.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Project List</title>
  <link rel="stylesheet" href="./01_project.css">
</head>
<body>

<div class="project">
  <h3>Key Projects:</h3>
  <div class="prop">
    <ol>
      <!-- Project 1 -->
      <li>
        <div class="card1">
          <h4>Task Scheduling System</h4>
          <h6>Core Functionalities</h6>
          <ul>
            <li><strong>Authentication & Authorization</strong>
              <ul>
                <li>Secure login & registration for Admin and Employee</li>
                <li>Role-based access control</li>
                <li>Token or session-based secure APIs</li>
              </ul>
            </li>
            <li><strong>Dashboard Interfaces</strong>
              <ul>
                <li><strong>Admin Dashboard:</strong> Assign tasks, approve leaves, track employees</li>
                <li><strong>Employee Dashboard:</strong> View tasks, request leave, chat with admin</li>
              </ul>
            </li>
            <li><strong>Task Scheduling Module</strong>
              <ul>
                <li>Assign tasks with due dates</li>
                <li>Status tracking: Assigned, In Progress, Completed</li>
                <li>Task timestamps and auto reminders</li>
              </ul>
            </li>
            <li><strong>Real-Time Chat (SignalR)</strong>
              <ul>
                <li>Admin ↔ Employee instant messaging</li>
                <li>Online status and read receipts</li>
              </ul>
            </li>
            <li><strong>Email Notification Service</strong>
              <ul>
                <li>Task assignment notifications</li>
                <li>Leave approval/rejection emails</li>
                <li>Overdue task reminders</li>
              </ul>
            </li>
            <li><strong>Leave Management</strong>
              <ul>
                <li>Employees apply for leave</li>
                <li>Admins approve or reject with email notice</li>
                <li>Live status updates</li>
              </ul>
            </li>
            <li><strong>Project Repository</strong>
              <ul>
                <li>
                  Available on GitHub: 
                  <b><a href="https://github.com/Anshul-Sharma2004/MyDotNetProject">PROJECT LINK</a></b>
                </li>
              </ul>
            </li>
            <li><strong>Frontend Design</strong>
              <ul>
                <li>HTML + CSS + Bootstrap responsive UI</li>
                <li>Clean design with sidebar navigation and modals</li>
              </ul>
            </li>
          </ul>

          <h2>🛠️ Technologies Used</h2>
          <table>
            <thead>
              <tr><th>Layer</th><th>Technology</th></tr>
            </thead>
            <tbody>
              <tr><td>Frontend</td><td>HTML, CSS, Bootstrap</td></tr>
              <tr><td>Backend</td><td>ASP.NET Core (C#)</td></tr>
              <tr><td>Real-Time</td><td>SignalR</td></tr>
              <tr><td>Authentication</td><td>ASP.NET Identity / JWT</td></tr>
              <tr><td>Database</td><td>SQL Server or MySQL</td></tr>
              <tr><td>Email Service</td><td>SMTP / SendGrid</td></tr>
            </tbody>
          </table>
        </div>
      </li>

      <!-- Project 2 -->
      <li>
        <div class="card2">
          <h4>Library Management System</h4>
          <h6>Core Functionalities</h6>
          <ul>
            <li><strong>User Management</strong>
              <ul>
                <li>Separate modules for Students, Faculty, and Admins</li>
                <li>Role-based permissions and access control</li>
                <li>Secure login and registration system</li>
              </ul>
            </li>
            <li><strong>Book Management</strong>
              <ul>
                <li>Add, update, delete, and list book records</li>
                <li>Relational tables for book issue, return, and submission</li>
                <li>Track book availability and overdue records</li>
              </ul>
            </li>
            <li><strong>REST API Integration</strong>
              <ul>
                <li>PHP-based RESTful APIs for all CRUD operations</li>
                <li>Postman used for testing endpoints</li>
                <li>JSON-formatted responses and error handling</li>
              </ul>
            </li>
            <li><strong>Frontend UI</strong>
              <ul>
                <li>Responsive design using HTML, CSS, and JavaScript</li>
                <li>User-friendly forms and data tables</li>
                <li>Separate views for admin and user roles</li>
              </ul>
            </li>
            <li><strong>Database Schema</strong>
              <ul>
                <li>MySQL-based schema</li>
                <li>Tables: Student, Faculty, Admin, BooksData, BookIssue, BookReturn, BookSubmit</li>
              </ul>
            </li>
            <li><strong>Development & Testing Tools</strong>
              <ul>
                <li>Developed using VS Code</li>
                <li>API tested using Postman</li>
                <li>Database managed with MySQL Workbench</li>
              </ul>
            </li>
            <li><strong>Local Server</strong>
              <ul>
                <li>Apache via XAMPP used for local hosting</li>
                <li>Loopback interface used for development and testing</li>
              </ul>
            </li>
            <li><strong>Project Repository</strong>
              <ul>
                <li>
                  Available on GitHub: 
                  <b><a href="https://github.com/Anshul-Sharma2004/database.git">PROJECT LINK</a></b>
                </li>
              </ul>
            </li>
          </ul>

          <h2>🛠️ Technologies Used</h2>
          <table>
            <thead>
              <tr><th>Layer</th><th>Technology</th></tr>
            </thead>
            <tbody>
              <tr><td>Frontend</td><td>HTML, CSS, JavaScript</td></tr>
              <tr><td>Backend</td><td>PHP (with REST APIs)</td></tr>
              <tr><td>Database</td><td>MySQL</td></tr>
              <tr><td>Tools</td><td>VS Code, Postman, MySQL Workbench</td></tr>
              <tr><td>Server</td><td>Apache (XAMPP)</td></tr>
              <tr><td>Localhost</td><td>Loopback (127.0.0.1)</td></tr>
            </tbody>
          </table>
        </div>
      </li>

      <!-- Project 3 -->
      <li>
        <div class="card3">
          <h4>C Program Output in Browser</h4>
          <h6>Core Functionalities</h6>
          <ul>
            <li><strong>Browser Integration</strong>
              <ul>
                <li>Executed C programs with HTML structure</li>
                <li>Displayed C output using embedded JavaScript</li>
                <li>Dynamic display of data inside a browser</li>
              </ul>
            </li>
            <li><strong>Frontend Design</strong>
              <ul>
                <li>Web-based UI for showing C outputs</li>
                <li>HTML and CSS used for structuring and styling output</li>
                <li>Lightweight JavaScript for DOM interaction</li>
              </ul>
            </li>
            <li><strong>Development Tools</strong>
              <ul>
                <li>Visual Studio Code for development</li>
                <li>Apache (XAMPP) for local server hosting</li>
                <li>Localhost (127.0.0.1) used for testing and debugging</li>
              </ul>
            </li>
            <li><strong>Project Repository</strong>
              <ul>
                <li>
                  Available on GitHub: 
                  <b><a href="https://github.com/Anshul-Sharma2004/C-programming.git">PROJECT LINK</a></b>
                </li>
              </ul>
            </li>
          </ul>

          <h2>🛠️ Technologies Used</h2>
          <table>
            <thead>
              <tr><th>Layer</th><th>Technology</th></tr>
            </thead>
            <tbody>
              <tr><td>Frontend</td><td>HTML, CSS, JavaScript</td></tr>
              <tr><td>Backend</td><td>C Programming</td></tr>
              <tr><td>Server</td><td>Apache (XAMPP)</td></tr>
              <tr><td>Tools</td><td>VS Code</td></tr>
              <tr><td>Localhost</td><td>127.0.0.1 (Loopback)</td></tr>
            </tbody>
          </table>
        </div>
      </li>

      <!-- Project 4 -->
      <li>
        <div class="card4">
          <h4>Initialize Database in LocalStorage</h4>
          <h6>Core Functionalities</h6>
          <ul>
            <li><strong>Client-Side Data Management</strong>
              <ul>
                <li>Manual database structure creation in JavaScript</li>
                <li>Performed core operations: Create, Read, Update, Delete</li>
                <li>Stored all data in the browser's LocalStorage</li>
              </ul>
            </li>
            <li><strong>Interactive UI</strong>
              <ul>
                <li>Form-based data input using HTML</li>
                <li>Used JavaScript to manipulate and render stored data</li>
                <li>Responsive layout using CSS</li>
              </ul>
            </li>
            <li><strong>Functional Buttons</strong>
              <ul>
                <li><b>INPUT Button:</b> Executes CRUD operations</li>
                <li><b>SAVE FILE:</b> Simulates saving data to file</li>
                <li><b>OPEN FILE:</b> Simulates reading data from file</li>
              </ul>
            </li>
            <li><strong>Project Repository</strong>
              <ul>
                <li>Available on GitHub: <a href="#">PROJECT LINK</a></li>
              </ul>
            </li>
          </ul>

          <h2>🛠️ Technologies Used</h2>
          <table>
            <thead>
              <tr><th>Layer</th><th>Technology</th></tr>
            </thead>
            <tbody>
              <tr><td>Frontend</td><td>HTML, CSS</td></tr>
              <tr><td>Logic & Storage</td><td>JavaScript (LocalStorage API)</td></tr>
              <tr><td>Database</td><td>Browser LocalStorage</td></tr>
              <tr><td>Tools</td><td>VS Code, Chrome DevTools</td></tr>
            </tbody>
          </table>
          <div class="note"><strong>Note:</strong> This project does not use any server or backend. All data is stored locally using the browser's <b>LocalStorage</b> API.</div>
        </div>
      </li>

      <!-- Project 5 -->
      <li>
        <div class="card5">
          <h4>My Portfolio</h4>
          <h6>Core Functionalities</h6>
          <ul>
            <li><strong>Responsive Personal Website</strong>
              <ul>
                <li>Fully responsive layout compatible with desktop, tablet, and mobile</li>
                <li>Clean UI showcasing developer profile and experience</li>
                <li>Animated form transitions and interactive design elements</li>
              </ul>
            </li>
            <li><strong>Dynamic Website Sections</strong>
              <ul>
                <li>About Me, Projects, Skills, Education, Experience</li>
                <li>Each section is accessible via a sticky sidebar or navbar</li>
              </ul>
            </li>
            <li><strong>User Authentication</strong>
              <ul>
                <li>Login and Registration forms using PHP (v8.4)</li>
                <li>Connected to MySQL for user data management</li>
                <li>Secure session management and input validation</li>
              </ul>
            </li>
            <li><strong>Project Repository</strong>
              <ul>
                <li>Available on GitHub: 
                  <b><a href="https://github.com/Anshul-Sharma2004/My-Portfolio-.git">PROJECT LINK</a></b>
                </li>
              </ul>
            </li>
          </ul>

          <h2>🛠️ Technologies Used</h2>
          <table>
            <thead>
              <tr><th>Layer</th><th>Technology</th></tr>
            </thead>
            <tbody>
              <tr><td>Frontend</td><td>HTML, CSS, JavaScript</td></tr>
              <tr><td>Backend</td><td>PHP (v8.4)</td></tr>
              <tr><td>Database</td><td>MySQL</td></tr>
              <tr><td>Tools</td><td>VS Code, XAMPP, phpMyAdmin</td></tr>
            </tbody>
          </table>
        </div>
      </li>

    </ol>
  </div>
</div>

</body>
</html>
