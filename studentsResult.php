<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Management System</title>
    <link rel="stylesheet" href="./css/studentsResult.css">
</head>
<body>
    <div class="container">
        <h1>Result Management System</h1>
        <div class="student-info">
            <p><strong>Student Name :</strong> Anuj Kumar</p>
            <p><strong>Student Roll Id :</strong> 10861</p>
            <p><strong>Student Class :</strong> Fourth(C)</p>
        </div>

        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Subject</th>
                    <th>Marks</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Maths</td>
                    <td>75</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>English</td>
                    <td>90</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Science</td>
                    <td>80</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Music</td>
                    <td>56</td>
                </tr>
                <tr class="total-row">
                    <td colspan="2"><strong>Total Marks</strong></td>
                    <td><strong>301</strong> out of <strong>400</strong></td>
                </tr>
                <tr class="percentage-row">
                    <td colspan="2"><strong>Percentage</strong></td>
                    <td><strong>75.25 %</strong></td>
                </tr>
                <tr class="download-row">
                    <td colspan="2"><strong>Download Result</strong></td>
                    <td><a href="#" class="btn">Download</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
