<?php

include 'db_connect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$dept_id = $_POST['dept_id'];

$sql = "INSERT INTO student(name,email,age,dept_id)
VALUES('$name','$email','$age','$dept_id')";

if(mysqli_query($conn,$sql))
{
    echo "Student Added Successfully";
}
else
{
    echo "Error: " . mysqli_error($conn);
}

?>