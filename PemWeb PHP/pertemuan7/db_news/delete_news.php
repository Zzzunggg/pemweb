<?php
$conn = mysqli_connect("localhost", "root", "", "db_news");
$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM news WHERE idnews=$id");

header("Location: view_news.php");
?>
