<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student - Student Management System</title>
    <link rel="stylesheet" href="./css/Add_Student.css">
</head>
<body>
    <header>
        <div class="logo">
            <h1>Student Management System</h1>
        </div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Students</a></li>
                <li><a href="#">Results</a></li>
                <li><a href="#">Add Student</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="add-student-form">
        <h2>Add New Student</h2>
        <form action="submit-student.php" method="POST">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="roll">Roll Number:</label>
            <input type="text" id="roll" name="roll" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>

            <label for="class">Class:</label>
            <select id="class" name="class" required>
                <option value="Select" disabled selected>Select Class</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
            </select>

            <label for="address">Address:</label>
            <textarea id="address" name="address" rows="4" required></textarea>

            <button type="submit">Add Student</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Student Management System. All rights reserved.</p>
    </footer>
</body>
</html>
