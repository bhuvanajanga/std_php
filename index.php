<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Student Registration Form</h2>

    <form action="insert.php" method="POST">
        <input type="text" name="name" placeholder="Student Name" required>
        <input type="email" name="email" placeholder="Email Address" required>
        <input type="text" name="phone" placeholder="Phone Number" required>
        <input type="text" name="course" placeholder="Course" required>

        <button type="submit">Register</button>
    </form>

    <a href="view.php" class="view-btn">View All Students</a>
</div>

</body>
</html>
