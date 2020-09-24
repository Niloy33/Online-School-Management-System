<?php
include '../../db/db.php';
$con = dbConnection();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher's Home</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1> <a href="teacherHome.php">Teacher's Home</a> </h1>
    <table>
        <thead>
            <tr>
                <td>
                    <a href="notice_student.php">Send Notice to Students</a>
                </td>
                <td>
                    <a href="notice_gurdian.php">Send Notice Gurdians</a>
                </td>
                <td>
                    <a href="all_task.php">All Task</a>
                </td>
                <td>
                    <a href="new_task.php">New Task</a>
                </td>
                <td>
                    <a href="syllabus.php">Syllabus</a>
                </td>
            </tr>
        </thead>
    </table>
    <br><br>
    <h2>All Task</h2>
    <table>
        <tr>
            <td>Date</td>
            <td>Class</td>
            <td>Task</td>
            <td>Status</td>
            <td>Details</td>
        </tr>
        <?php 
            $sql = "SELECT * FROM task";
            $notices = mysqli_query($con, $sql);

            foreach($notices as $notice){
                ?>
                <tr>
                    <td><?=$notice['timastamp'] ?></td>
                    <td><?=$notice['class'] ?></td>
                    <td><?=nl2br($notice['task']) ?></td>
                    <td><?=$notice['status'] ? 'Open' : 'Closed' ?></td>
                    <td> <a href="task_details.php?id=<?=$notice['id'] ?>">Details</a> </td>
                </tr>
                
                <?php
            }
        ?>
    </table>
    <br>
</body>

</html>
