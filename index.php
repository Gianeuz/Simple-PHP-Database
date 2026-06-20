<html>

<head>
    <title>Student Record</title>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "lab6");
    ?>
</head>

<body>
    <center>
        <a href="form.php">Add Student</a>
        <table border="1" width="80%" stle="border-collapse:collapse;">
            <tr>
                <th>Student Number</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Course</th>
                <th>&nbsp;</th>
            </tr>
            <?php

            $result = mysqli_query($conn, "select * from student order by lname asc");
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td><?php echo $row['studnum']; ?></td>
                    <td><?php echo $row['fname']; ?></td>
                    <td><?php echo $row['lname']; ?></td>
                    <td><?php echo $row['course']; ?></td>
                    <td align="center"><a href="delete.php?studnum=<?php echo $row['studnum']; ?>"
                            onclick="return confirm('Are you sure you want to delete this record?');">Delete</a></td>
                </tr>

            <?php
            }
            ?>
        </table>
    </center>

</body>

</html>
