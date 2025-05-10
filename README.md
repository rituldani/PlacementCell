Placement System
Description
This project is a Placement System designed for managing the placement process of students, integrating multiple databases to track drive details, student information, and placement status. The system involves two main databases (details and placement) that store student data, placement drive details, and login information. It includes a PHP backend for database connection and query handling.

Features
Student Information Management: Stores student details such as USN, name, email, mobile number, and academic information.

Placement Drive Management: Tracks the placement drives, including company names, dates, and selection criteria.

Placement Status: Tracks the status of each student in placement drives, including attendance, selection status, and placement outcomes.

Multiple User Types: Admin and student login functionalities.

Database Integration: Uses two databases to manage student information and placement drive details.

Admin Interface: Admin can view and update the placement status of students.

Technologies Used
Frontend: HTML, CSS, JavaScript

Backend: PHP

Database: MySQL

Web Server: Apache

Hosting: InfinityFree

Setup Instructions
1. Clone the Repository
Clone the project repository to your local machine or web server.
```
git clone https://github.com/yourusername/placement-system.git
```
2. Create Databases
Create two MySQL databases on your server:

details: For storing student details.

placement: For storing placement-related data.

3. Import SQL Files
Import the provided SQL dump files into the databases:

details.sql: For the details database.

placement.sql: For the placement database.

4. Configure Database Connection
Edit the db_connection.php file to configure the database connection details.

```
<?php
$servername = "localhost";  // Server name (use IP if necessary)
$username = "your_database_username";  // Database username
$password = "your_database_password";  // Database password
$dbname = "your_database_name";  // Database name
$port = 3306;  // Default MySQL port (use 3307 if necessary)

$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}
?>
```

5. Upload to Web Server
Upload the project files to your web hosting server, typically to the htdocs or www directory.

6. Access the Project
Visit your site URL (e.g., http://yourdomain.com) to access the Placement System.


User Login
Admin Login: Use the admin credentials provided during the setup to access the admin dashboard.

Student Login: Students can login using their USN and email.

