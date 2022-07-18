<?php
include('config/db_connect.php');

// 'delete' comes from the submit button

if (isset($_POST['delete'])) {

    $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);

    // $sql = "DELETE FROM `text` WHERE id = $id_to_delete";
    $sql = "DELETE FROM text WHERE id = $id_to_delete";

    if (mysqli_query($conn, $sql)) {
        header('Location: index.php');
    } else {
        echo 'query error: ' . mysqli_error($conn);
    }
}
