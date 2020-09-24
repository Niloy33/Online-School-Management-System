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
    <h2>Update Task</h2>
    <?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM task WHERE id = $id";
    $notices = mysqli_query($con, $sql);

    foreach ($notices as $notice) {
    ?>
        <form method="POST">
            <table>
                <thead>
                    <tr>
                        <td>Select Class:</td>
                        <td>
                            <br>
                            <select name="class" required>
                                <option value="">Select Class</option>
                                <option <?= $notice['class'] == 1 ? 'selected' : '' ?> value="1">1</option>
                                <option <?= $notice['class'] == 2 ? 'selected' : '' ?> value="2">2</option>
                                <option <?= $notice['class'] == 3 ? 'selected' : '' ?> value="3">3</option>
                                <option <?= $notice['class'] == 4 ? 'selected' : '' ?> value="4">4</option>
                                <option <?= $notice['class'] == 5 ? 'selected' : '' ?> value="5">5</option>
                                <option <?= $notice['class'] == 6 ? 'selected' : '' ?> value="6">6</option>
                                <option <?= $notice['class'] == 7 ? 'selected' : '' ?> value="7">7</option>
                                <option <?= $notice['class'] == 8 ? 'selected' : '' ?> value="8">8</option>
                                <option <?= $notice['class'] == 9 ? 'selected' : '' ?> value="9">9</option>
                                <option <?= $notice['class'] == 10 ? 'selected' : '' ?> value="10">10</option>
                                <option <?= $notice['class'] == 11 ? 'selected' : '' ?> value="11">11</option>
                                <option <?= $notice['class'] == 12 ? 'selected' : '' ?> value="12">12</option>
                            </select>
                            <br>
                            <br>
                        </td>
                    </tr>
                    <tr>
                        <td>Task:</td>
                        <td>
                            <textarea name="notice" id="" cols="60" rows="10" required><?=$notice['task']?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>Status:</td>
                        <td>
                            <br>
                            <select name="status" id="" onchange="loadDoc(this.value)">
                                <option value="1" <?= $notice['status'] == 1 ? 'selected' : '' ?>>Open</option>
                                <option value="0" <?= $notice['status'] == 0 ? 'selected' : '' ?>>Closed</option>
                            </select>
                            <br>
                            <br>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <br>
                            <button type="submit">Update</button>
                            <br>
                            <br>
                        </td>
                    </tr>
                </thead>
            </table>
        </form>
    <?php
    }
    ?>
    <br>
</body>

</html>

<?php

if (isset($_POST['class']) && $_POST['class'] != '' && isset($_POST['notice']) && $_POST['notice'] != '') {

    $class = $_POST['class'];
    $notice = $_POST['notice'];
    $status = $_POST['status'];
    $sql = "UPDATE `task` SET `class`='$class',`task`='$notice',`status`='$status' WHERE id = $id";
    mysqli_query($con, $sql);

    header("location: task_details.php?id=$id");
}
