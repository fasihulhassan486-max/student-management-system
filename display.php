<?php
include 'db_connect.php';

$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>All Students</title>

    <style>
        body {
            font-family: Arial;
            background: #f0f2f5;
            text-align: center;
        }

        table {
            margin: auto;
            width: 80%;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
        }

        th {
            background: #4a90e2;
            color: white;
        }

        button {
            padding: 6px 10px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .delete {
            background: red;
            color: white;
        }

        .update {
            background: orange;
            color: white;
        }
    </style>

</head>

<body>

<h2>Student Records</h2>

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

       <a href="update.php?id=<?php echo $row['student_id']; ?>">
    <button class="update">Update</button>
</a>

        <a href="delete.php?id=<?php echo $row['student_id']; ?>">
    <button class="delete">Delete</button>
</a>

    </td>
</tr>

<?php
}
?>

</table>

</body>
</html>