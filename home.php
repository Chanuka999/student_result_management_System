<?php  
  session_start();
  if(!isset($_SESSION['username'])){
    header('location:login.php');
  }

?>

<!--?php

$host = "localhost";
$user = "root";
$password = "";
$database = "student_system";

$conn = new mysqli($host, $user, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$student_query = "SELECT COUNT(*) AS total_students FROM students";
$student_result = $conn->query($student_query);
$total_students = $student_result->fetch_assoc()['total_students'];


$course_query = "SELECT COUNT(*) AS total_courses FROM courses";
$course_result = $conn->query($course_query);
$total_courses = $course_result->fetch_assoc()['total_courses'];


$enrollment_query = "SELECT COUNT(*) AS total_enrollments FROM enrollments";
$enrollment_result = $conn->query($enrollment_query);
$total_enrollments = $enrollment_result->fetch_assoc()['total_enrollments'];
?-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}

.container {
    display: flex;
    height: 100vh;
}

/* Sidebar */
.sidebar {
    width: 250px;
    background-color: #2c3e50;
    padding: 20px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    color: #ecf0f1;
}

.sidebar h2 {
    text-align: center;
    margin-bottom: 30px;
    color: #f39c12;
}

.sidebar ul {
    list-style-type: none;
}

.sidebar ul li {
    margin: 20px 0;
}

.sidebar ul li a {
    text-decoration: none;
    color: white;
    font-size: 18px;
    display: block;
    padding: 10px;
    background-color: #34495e;
    border-radius: 5px;
}

.sidebar ul li a:hover {
    background-color: #1abc9c;
}

.logout {
    text-align: center;
    margin-top: 20px;
}

.logout p {
    margin-bottom: 10px;
}

.logout button {
    background-color: #e74c3c;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.logout button:hover {
    background-color: #c0392b;
}

/* Main Content */
.main-content {
    flex-grow: 1;
    padding: 40px;
    background-color: #ecf0f1;
}

.main-content h1 {
    text-align: center;
    margin-bottom: 40px;
}

.cards {
    display: flex;
    justify-content: space-around;
}

.card {
    background-color: white;
    width: 200px;
    height: 150px;
    border-radius: 8px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
    padding: 20px;
}

.card h3 {
    margin-bottom: 10px;
    color: #34495e;
}

.card p {
    font-size: 24px;
    color: #2980b9;
}


</style>
<body>
<div style="background-image:url(images/nature2.jpg);background-repeat:no-repeat; width:100%; max-height:max-content">
<h1 class="hello" style="text-align: center; color:red">Welcome
    <?php echo $_SESSION['username'];
    ?>
</h1>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <h2>Dashboard</h2>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="student.php">Students</a></li>
                <li><a href="courses.php">Courses</a></li>
                <li><a href="#">Enrollments</a></li>
                <li><a href="#">Marks</a></li>
                <li><a href="#">Users</a></li>
            </ul>
            <div class="logout">
                <p>Welcome, administrator</p>
                <button>Logout</button>
            </div>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <h1>STUDENTS RESULT MANAGEMENT SYSTEM</h1>
            <div class="cards">
                <div class="card">
                    <h3>Total Students</h3>
                    <p><!--?php echo $total_students; ?--></p>
                </div>
                <div class="card">
                    <h3>Total Courses</h3>
                    <p><!--?php echo $total_courses; ?--></p>
                </div>
                <div class="card">
                    <h3>Total Enrollments</h3>
                    <p><!--?php echo $total_enrollments; ?--></p>
                </div>
            </div>
        </div>
    </div>


<?php
// Close the database connection
//$conn->close();
?>



 


  

 


 <div class="footer"style="text-align:center">
    <a href="logout.php"><button class="btn" style="color:blueviolet">Log out</button></a>
 </div>
 </div>
</body>
</html>