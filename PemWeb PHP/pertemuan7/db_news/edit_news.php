<?php
$conn = mysqli_connect("localhost", "root", "", "db_news");
$id = $_GET['id'];
$data = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM news WHERE idnews=$id"));
?>

<h2>Edit News</h2>
<form action="update_news.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idnews" value="<?= $data['idnews'] ?>">
    Title: <input type="text" name="title" value="<?= $data['title'] ?>"><br><br>
    Content:<br><textarea name="content"><?= $data['content'] ?></textarea><br><br>
    Old Picture: <img src='img/<?= $data['pic'] ?>' width='100'><br>
    New Picture (optional): <input type="file" name="pic"><br><br>
    <input type="submit" value="Update">
</form>
