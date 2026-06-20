<?php
$conn = mysqli_connect("localhost", "root", "", "lab6");
$studnum = $_POST['studnum'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$course = $_POST['course'];

mysqli_query($conn, "insert into student values('$studnum','$fname','$lname','$course')");
?>

<script>
    alert("Student Record Added");
    window.location = "index.php";
</script>
