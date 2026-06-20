<?php
$conn = mysqli_connect("localhost", "root", "", "lab6");
$studnum = $_GET['studnum'];

mysqli_query($conn, "delete from student where studnum='$studnum'");
?>

<script>
    alert("Student Record Deleted");
    window.location = "index.php";
</script>
