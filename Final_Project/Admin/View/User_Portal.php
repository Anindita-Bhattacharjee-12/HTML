<?php
include "../../Dashboard/config.php";
$result=$conn->query("SELECT * FROM registration");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>View User</title>
        <link rel="stylesheet" href="../CSS/User_Portal.css">
    </head>
    <body>
        <h1>User Registration Information</h1>
        <table border="2" cellpadding="10" class="form_design">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Age</th>
                <th>Phone Number</th>
                <th>Guardian Number</th>
                <th>Email Address</th>
                <th>Comments</th>
            </tr>
            <?php while($row=$result->fetch_assoc()){ ?>
            <tr>
                    <td><?php echo $row['Id']; ?></td>
                    <td><?php echo $row['Full_Name']; ?></td>
                    <td><?php echo $row['Age']; ?></td>
                    <td><?php echo $row['Phone_Number']; ?></td>
                    <td><?php echo $row['Guardian_Number']; ?></td>
                    <td><?php echo $row['Email_Address']; ?></td>
                    <td>
                     <a href="Delete_User.php?Id=<?= $row['Id']; ?>">Delete</a>
                     <a href="User_Update.php?Id=<?= $row['Id']; ?>">Update</a>
                    </td>

            </tr>
            <?php } ?>
        </table>
        <div style="text-align:center">
        <a href="Admin_Dashboard.php" style="color:black;">Previous Page</a>
        </div>
    </body>
</html>