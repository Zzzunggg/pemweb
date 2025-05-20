<html>
    <head>
        <title>Data Komentar</title>
    </head>
    <body>
        <?php
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $komentar = $_POST['komentar'];
        ?>
        <h1>Data Komentar Anda</h1>
        <hr>
        Nama Anda  : <?php echo $nama; ?><br>
        Email Anda : <?php echo $email; ?><br>
        Komentar  : <?php echo $komentar; ?><br>
        <a href = "FormInputKomentar.php">Input Data Lagi</a>
        
    </body>
</html>