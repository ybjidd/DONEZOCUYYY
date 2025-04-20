<?php
$conn = mysqli_connect("localhost", "root", "", "donezo");
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM tasks WHERE id=$id");
header("Location: index.php");
exit;
?>
