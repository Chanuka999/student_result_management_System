<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Management</title>
    <link rel="stylesheet" href="./css/course.css">
</head>

<body>

    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <h2>Courses</h2>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="student.php">Students</a></li>
                <li><a href="courses.php">Courses</a></li>
                <li><a href="#">Enrollments</a></li>
                <li><a href="#">Marks</a></li>
                <li><a href="#">Users</a></li>
            </ul>
            <div class="logout">
                <p>Welcome, administrator</p>
                <a href="logout.php"><button class="btn" style="color:blueviolet">Log out</button></a>
            </div>
        </div>

        <div class="main-content">
            <h1>Courses</h1>

            <!-- Search Bar -->
            <div class="search-bar">
                <input type="text" placeholder="Search by courses..." />
                <input type="text" placeholder="Search by name..." />
                <button>Search</button>
                <button class="add-btn">+ Add New Student</button>
            </div>
</div>
</div>
</body>
</html>