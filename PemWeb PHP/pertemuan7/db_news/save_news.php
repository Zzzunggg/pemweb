<?php
$conn = mysqli_connect("localhost", "root", "", "db_news");

$title = $_POST['title'];
$content = $_POST['content'];
$pic_name = $_FILES['pic']['name'];
$tmp = $_FILES['pic']['tmp_name'];

move_uploaded_file($tmp, "img/" . $pic_name);

$sql = "INSERT INTO news (title, content, pic) VALUES ('$title', '$content', '$pic_name')";
mysqli_query($conn, $sql);

echo "News successfully added. <a href='view_news.php'>View All News</a>";
?>
