<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Management</title>
    <link rel="stylesheet" href="./css/course.css">
    <link rel="stylesheet" href="./css/studentsDetail.css">
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
                <li><a href="studentsDetail.php">Marks</a></li>
                <li><a href="#">Users</a></li>
            </ul>
            <div class="logout">
                <p>Welcome, administrator</p>
                <a href="logout.php"><button class="btn" style="color:blueviolet">Log out</button></a>
            </div>
        </div>

        <div class="search-container">
        <div class="search-box">
            <h2>School Result Management System</h2>
            <form action="search-result.php" method="POST">
                <label for="roll-id">Enter your Roll Id</label>
                <input type="text" id="roll-id" name="roll-id" placeholder="Enter Your Roll Id" required>

                <label for="class">Class</label>
                <select id="class" name="class" required>
                    <option value="Fourth Section-C">Fourth Section-C</option>
                    <option value="Fifth Section-A">Fifth Section-A</option>
                    <option value="Sixth Section-B">Sixth Section-B</option>
                </select>

               <button><a href="studentsResult.php">Submit</a> Search <span>&#10004;</span></button>
                   
               
            </form>
            <a href="home.php" class="back-link">Back to Home</a>
        </div>
    </div>
    </div>
    </body>
    </html>