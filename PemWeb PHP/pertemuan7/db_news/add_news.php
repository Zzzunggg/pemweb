<!DOCTYPE html>
<html>
<head><title>ADD NEWS</title></head>
<body>
<h2>ADD NEWS</h2>
<form action="save_news.php" method="post" enctype="multipart/form-data">
    <label>Title</label><br>
    <input type="text" name="title"><br><br>

    <label>Content</label><br>
    <textarea name="content" rows="5" cols="40"></textarea><br><br>

    <label>Picture</label><br>
    <input type="file" name="pic"><br><br>

    <input type="submit" value="Send">
    <input type="reset" value="Cancel">
</form>
</body>
</html>
