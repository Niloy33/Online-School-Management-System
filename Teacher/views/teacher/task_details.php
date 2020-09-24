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
    <br>
    <h2> Task Details</h2>
    <table>
        <tr>
            <td>Date</td>
            <td>Class</td>
            <td>Task</td>
            <td>Status</td>
        </tr>
        <?php
        $id = $_GET['id'];
        $sql = "SELECT * FROM task WHERE id = $id";
        $notices = mysqli_query($con, $sql);

        foreach ($notices as $notice) {
        ?>
            <tr>
                <td><?= $notice['timastamp'] ?></td>
                <td><?= $notice['class'] ?></td>
                <td><?= nl2br($notice['task']) ?></td>
                <td>
                    <span id="response"></span> <br>
                    <select name="status" id="" onchange="loadDoc(this.value)">
                        <option value="1" <?= $notice['status'] == 1 ? 'selected' : '' ?>>Open</option>
                        <option value="0" <?= $notice['status'] == 0 ? 'selected' : '' ?>>Closed</option>
                    </select>
                    <br> <br>
                </td>
            </tr>

        <?php
        }
        ?>
    </table>
    <br>
    <a href="edit.php?id=<?= $id ?>">Edit</a> &nbsp;&nbsp;&nbsp;
    <a href="delete.php?id=<?= $id ?>" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a><br>

    <br><br>

    <h2>Comments</h2>
    <form method="post">
        <input type="hidden" name="id" value="<?=$id?>">
        <input type="text" name="comment"> <input type="submit" value="Post">
    </form>
<br> <br>
    <table>
    <?php
        $sql = "SELECT * FROM comment WHERE task_id = $id";
        $comments = mysqli_query($con, $sql);

        foreach ($comments as $notice) {
        ?>
            <tr>
                <td><?= $notice['timestamp'] ?></td>
                <td><?= $notice['comment'] ?></td>
            </tr>

        <?php
        }
        ?>
    </table>

    <script>
        function loadDoc(status_s) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("response").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "status.php?status=" + status_s + "&id=<?= $id ?>", true);
            xhttp.send();
        }
    </script>
</body>

</html>

<?php

if (isset($_POST['comment']) && $_POST['comment'] != '' && isset($_POST['id']) && $_POST['id'] != '') {

    $id = $_POST['id'];
    $comment = $_POST['comment'];
    $status = $_POST['status'];
    $sql = "INSERT INTO `comment` (`task_id`, `comment`) VALUES ('$id','$comment')";

    mysqli_query($con, $sql);

    header('location: task_details.php?id=' . $id);
}
