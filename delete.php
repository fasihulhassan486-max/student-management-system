<?php
include 'db_connect.php';

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM student WHERE student_id=$id");

header("Location: index.php");
?>