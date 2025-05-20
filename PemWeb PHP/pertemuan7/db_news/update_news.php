<?php
$conn = mysqli_connect("localhost", "root", "", "db_news");

$id = $_POST['idnews'];
$title = $_POST['title'];
$content = $_POST['content'];

if ($_FILES['pic']['name'] != '') {
    $pic_name = $_FILES['pic']['name'];
    $tmp = $_FILES['pic']['tmp_name'];
    move_uploaded_file($tmp, "img/" . $pic_name);
    $sql = "UPDATE news SET title='$title', content='$content', pic='$pic_name' WHERE idnews=$id";
} else {
    $sql = "UPDATE news SET title='$title', content='$content' WHERE idnews=$id";
}

mysqli_query($conn, $sql);
header("Location: view_news.php");
?>
