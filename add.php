<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {

    include('config/db_connect.php');
    if (isset($_POST['text'])) {

        // mysqli_real... helps to protect from attacks
        $text = mysqli_real_escape_string($conn, $_POST['text']);

        $sql = "INSERT INTO `text` (`text`) VALUES ('$text')";

        $query = mysqli_query($conn, $sql);

        if ($query) {
            $success = 'entry successfull';
        } else {
            echo 'error occurred';
        }
    };
}

?>

<div class="container" style="display: flex; justify-content: center;">
    <?php include('templates/header.php'); ?>
</div>

<div class="container" style="display: flex; justify-content: center;">
    <h3> <?php print_r($success) ?> </h3>
</div>

<div style="display: flex; justify-content: center;">
    <form action="add.php" method="POST">
        <div>
            </br>
            <label for="text">ENTER TEXT: </label>
            <input type="text" name="text" required>
        </div>
        <div>
            <input type="submit" value="Submit" name="submit">
        </div>
    </form>
</div>
<div class="container" style="display: flex; justify-content: center;">
    <a href="/joe_php_form">Back to List</a>
</div>