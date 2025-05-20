<?php
$conn = mysqli_connect("localhost", "root", "", "db_news");
$result = mysqli_query($conn, "SELECT * FROM news");

echo "<h2>List of News</h2>";
echo "<a href='add_news.php'>+ Add New</a><br><br>";
echo "<table border='1' cellpadding='10'>
<tr><th>ID</th><th>Title</th><th>Content</th><th>Picture</th><th>Action</th></tr>";

while ($row = mysqli_fetch_array($result)) {
    echo "<tr>
        <td>{$row['idnews']}</td>
        <td>{$row['title']}</td>
        <td>{$row['content']}</td>
        <td><img src='img/{$row['pic']}' width='100'></td>
        <td>
            <a href='edit_news.php?id={$row['idnews']}'>Edit</a> | 
            <a href='delete_news.php?id={$row['idnews']}'>Delete</a>
        </td>
    </tr>";
}
echo "</table>";
?>
