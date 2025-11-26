<?php include "db.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>View Students</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h2>Registered Students</h2>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Course</th>
        </tr>

        <?php
        $result = mysqli_query($conn, "SELECT * FROM students");

        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?= $row['id']; ?></td>
                <td><?= $row['name']; ?></td>
                <td><?= $row['email']; ?></td>
                <td><?= $row['phone']; ?></td>
                <td><?= $row['course']; ?></td>
                <td><?=$row['Year'];?></td>
                <td><?=$row['About you'];?></td>

            </tr>
        <?php } ?>

    </table>

    <a class="btn" href="index.php">Back</a>

</div>

</body>
</html>
