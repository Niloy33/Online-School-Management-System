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
    <h2>New Task</h2>
    <form method="POST">
        <table>
            <thead>
                <tr>
                    <td>Select Class:</td>
                    <td>
                        <br>
                        <select name="class" required>
                            <option value="">Select Class</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                        <br>
                        <br>
                    </td>
                </tr>
                <tr>
                    <td>Task:</td>
                    <td>
                        <textarea name="notice" id="" cols="60" rows="10" required></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Status:</td>
                    <td>
                        <br>
                        <select name="status" id="">
                            <option value="1">Open</option>
                            <option value="0">Closed</option>
                        </select>
                        <br>
                        <br>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <br>
                        <button type="submit">Add</button>
                        <br>
                        <br>
                    </td>
                </tr>
            </thead>
        </table>
    </form>
    <br>
</body>

</html>

<?php

if (isset($_POST['class']) && $_POST['class'] != '' && isset($_POST['notice']) && $_POST['notice'] != '') {

    $class = $_POST['class'];
    $notice = $_POST['notice'];
    $status = $_POST['status'];
    $sql = "insert into task (class, task, status) values ('$class', '$notice', '$status')";

    mysqli_query($con, $sql);

    header('location: all_task.php');
}
