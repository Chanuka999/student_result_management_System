<?php
$query = "SELECT * FROM students";
//$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Management</title>
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
    margin-bottom: 20px;
}

/* Search Bar */
.search-bar {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
}

.search-bar input[type="text"] {
    width: 30%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.search-bar button {
    background-color: #5cb85c;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.search-bar button.add-btn {
    background-color: #3498db;
}

.search-bar button:hover {
    background-color: #4cae4c;
}

.search-bar button.add-btn:hover {
    background-color: #2980b9;
}

/* Student Table */
.student-table {
    width: 100%;
    border-collapse: collapse;
    background-color: white;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
}

.student-table th, .student-table td {
    padding: 10px;
    text-align: center;
    border: 1px solid #ccc;
}

.student-table th {
    background-color: #2c3e50;
    color: white;
}

.student-table td img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
}

.student-table .edit-btn {
    background-color: #f39c12;
    color: white;
    padding: 5px 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.student-table .edit-btn:hover {
    background-color: #e67e22;
}

.student-table .delete-btn {
    background-color: #e74c3c;
    color: white;
    padding: 5px 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.student-table .delete-btn:hover {
    background-color: #c0392b;
}

/* Stats */
.stats {
    display: flex;
    justify-content: space-around;
    margin-top: 20px;
}

.stat-item {
    background-color: white;
    padding: 20px;
    width: 30%;
    text-align: center;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
}

.stat-item h3 {
    color: #2c3e50;
    margin-bottom: 10px;
}

.stat-item p {
    font-size: 24px;
    color: #3498db;
}


</style>
<body>

    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <h2>Students</h2>
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

        <!-- Main Content -->
        <div class="main-content">
            <h1>Courses</h1>

            <!-- Search Bar -->
            <div class="search-bar">
                <input type="text" placeholder="Search by Course..." />
                <input type="text" placeholder="Search by Name..." />
                <button>Search</button>
                <button class="add-btn">+ Add New Courses</button>
            </div>

            <!-- Student Table -->
            <table class="student-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Birthdate</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Enrolled</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        $i = 1;
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $i++ . "</td>";
                            echo "<td><img src='path/to/student_image.png' alt='Student Image'></td>";
                            echo "<td>" . $row['name'] . "</td>";
                            echo "<td>" . $row['birthdate'] . "</td>";
                            echo "<td>" . $row['gender'] . "</td>";
                            echo "<td>" . $row['address'] . "</td>";
                            echo "<td>" . $row['phone'] . "</td>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . ($row['enrolled'] ? 'Yes' : 'No') . "</td>";
                            echo "<td>
                                    <button class='edit-btn'>Edit</button>
                                    <button class='delete-btn'>Delete</button>
                                  </td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='10'>No students found</td></tr>";
                    }
                    ?>
                </tbody>
            </table>

            <!-- Stats -->
            <div class="stats">
                <div class="stat-item">
                    <h3>Total Students</h3>
                    <p>6</p>
                </div>
                <div class="stat-item">
                    <h3>Average Age</h3>
                    <p>25.67</p>
                </div>
                <div class="stat-item">
                    <h3>Gender Distribution</h3>
                    <p>Male: 66.67%, Female: 33.33%</p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

<?php
// Close the connection
$conn->close();
?>