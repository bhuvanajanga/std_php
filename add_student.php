<?php include "db.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h2>Add Student</h2>

    <form method="POST">
        <input type="text" name="name" placeholder="Student Name" required>
        <input type="email" name="email" placeholder="Email Address" required>
        <input type="text" name="phone" placeholder="Phone Number" required>
        <input type="text" name="course" placeholder="Course" required>
        
        <button type="submit" name="submit">Add Student</button>
    </form>

    <a class="btn" href="index.php">Back</a>

</div>

</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];

    $sql = "INSERT INTO students (name, email, phone, course) 
            VALUES ('$name', '$email', '$phone', '$course')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Student Added Successfully!');</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
