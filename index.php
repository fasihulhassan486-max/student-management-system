<?php
include 'db_connect.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="style.css">

    <style>
        table {
            margin-top: 20px;
            width: 100%;
            background: white;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        th {
            background: #4a90e2;
            color: white;
        }

        .delete {
            background: red;
            color: white;
            padding: 5px;
            border: none;
            cursor: pointer;
        }

        .update {
            background: orange;
            color: white;
            padding: 5px;
            border: none;
            cursor: pointer;
        }
    </style>

</head>

<body>

<div class="container">

<h1>Student Management Dashboard</h1>

<!-- ADD STUDENT FORM -->
<form action="insert.php" method="POST">

<input type="text" name="name" placeholder="Enter Name" required>
<input type="email" name="email" placeholder="Enter Email" required>
<input type="number" name="age" placeholder="Enter Age" required>
<input type="number" name="dept_id" placeholder="Department ID" required>

<input type="submit" value="Add Student">

</form>

<hr>

<!-- SHOW STUDENTS -->
<h2>All Students</h2>

<table>

<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Age</th>
    <th>Dept ID</th>
    <th>Actions</th>
</tr>

<?php

$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result))
{
?>

<tr>
    <td><?php echo $row['student_id']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['age']; ?></td>
    <td><?php echo $row['dept_id']; ?></td>

    <td>

        <!-- UPDATE -->
        <a href="update.php?id=<?php echo $row['student_id']; ?>">
            <button class="update">Update</button>
        </a>

        <!-- DELETE -->
        <a href="delete.php?id=<?php echo $row['student_id']; ?>">
            <button class="delete">Delete</button>
        </a>

    </td>
</tr>

<?php } ?>

</table>

</div>

</body>
</html>