<?php
include 'db_connect.php';

$id = $_GET['id'];

$sql = "SELECT * FROM student WHERE student_id=$id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
?>

<h2>Update Student</h2>

<form method="POST">

<input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>
<input type="email" name="email" value="<?php echo $row['email']; ?>"><br><br>
<input type="number" name="age" value="<?php echo $row['age']; ?>"><br><br>
<input type="number" name="dept_id" value="<?php echo $row['dept_id']; ?>"><br><br>

<input type="submit" name="update" value="Update Student">

</form>

<?php

if(isset($_POST['update']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $dept_id = $_POST['dept_id'];

    $sql2 = "UPDATE student SET
    name='$name',
    email='$email',
    age='$age',
    dept_id='$dept_id'
    WHERE student_id=$id";

    if(mysqli_query($conn,$sql2))
    {
        echo "Student Updated Successfully";
    }
    else
    {
        echo "Error";
    }
}

?>