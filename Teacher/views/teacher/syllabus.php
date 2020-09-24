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
    <h2>Syllabus</h2>
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
                    <td>Syllabus:</td>
                    <td>
                        <textarea name="notice" id="" cols="60" rows="10" required></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <br>
                        <button type="submit">Send</button>
                        <br>
                        <br>
                    </td>
                </tr>
            </thead>
        </table>
    </form>
    <br>
    <br>
    <br>
    <br>
    <h2>Syllabus List</h2>
    <table>
        <tr>
            <td>Date</td>
            <td>Class</td>
            <td>Syllabus</td>
        </tr>
        <?php 
            $sql = "SELECT * FROM syllabus";
            $notices = mysqli_query($con, $sql);

            foreach($notices as $notice){
                ?>
                <tr>
                    <td><?=$notice['timestamp'] ?></td>
                    <td><?=$notice['class'] ?></td>
                    <td><?=nl2br($notice['syllabus']) ?></td>
                </tr>
                
                <?php
            }
        ?>
    </table>
</body>

</html>

<?php

if (isset($_POST['class']) && $_POST['class'] != '' && isset($_POST['notice']) && $_POST['notice'] != '') {

    $class = $_POST['class'];
    $notice = $_POST['notice'];
    $sql = "insert into syllabus (class, syllabus) values ('$class', '$notice')";

    mysqli_query($con, $sql);

    header('location: syllabus.php');
}
