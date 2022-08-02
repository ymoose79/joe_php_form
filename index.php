<?php
include('config/db_connect.php');

// write query to get data
$sql = 'SELECT * FROM text';
// make query and get results
$res = mysqli_query($conn, $sql);
// fetch rows and FORMAT as array 
$textDB = mysqli_fetch_all($res, MYSQLI_ASSOC);

// ------------- good practices to remove results and close connection
mysqli_free_result($res);
mysqli_close($conn);


?>

<!DOCTYPE html>
<html lang="en">


<div class="container" style="display: flex; justify-content: center;">
    <?php include('templates/header.php'); ?>
</div>

<div style="display: flex; justify-content: center;">

    <table>
        <tr style="text-decoration: underline;">
            <td>text</td>
            <td>delete</td>
        </tr>
        <?php foreach ($textDB as $text) : ?>
            <tr>
                <td style="width: 15rem;"><?php echo htmlspecialchars($text['text']) ?></td>
                <td style="width: 3rem;">
                    <form action="delete.php" method="POST">
                        <input type="hidden" name="id_to_delete" value="<?php echo $text['id'] ?>">
                        <input type="submit" name="delete" value="❌">
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    </br>
</div>
<div style="display: flex; justify-content: center; margin-top: 2rem;">
    <a href="add.php">Input texts</a>
</div>
</body>

</html>
