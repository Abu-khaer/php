<?php include 'config/db.php'; 

$id = $_GET['id'];

$query = mysqli_query($conn, "DELETE FROM student WHERE id='$id'");

if ($query) {
    header('Location: read.php');
}

?>

