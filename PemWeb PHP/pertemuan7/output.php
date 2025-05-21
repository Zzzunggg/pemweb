<!DOCTYPE html>
<html>
<head>
    <title>Output</title>
</head>
<body>
    <h2 align="center">KONSER AMAL INDAHNYA BERBAGI</h2>
    <table align="center" border="0">
        <?php
        $nama = $_POST['nama'];
        $studio = $_POST['studio'];
        $kelas = $_POST['kelas'];
        $jumlah = $_POST['jumlah'];

        // Menentukan bintang tamu berdasarkan studio
        if ($studio == "Studio 1") {
            $bintang = "Opick";
        } else {
            $bintang = "Raihan";
        }

        // Menentukan harga tiket berdasarkan jenis kelas
        if ($kelas == "VIP") {
            $harga = 500000;
        } else {
            $harga = 250000;
        }

        // Hitung total harga
        $total = $jumlah * $harga;

        echo "<tr><td>Nama Pemesanan</td><td>: $nama</td></tr>";
        echo "<tr><td>Kode Studio</td><td>: $studio</td></tr>";
        echo "<tr><td>Bintang Tamu</td><td>: $bintang</td></tr>";
        echo "<tr><td>Jenis Kelas</td><td>: $kelas</td></tr>";
        echo "<tr><td>Jumlah Beli</td><td>: $jumlah</td></tr>";
        echo "<tr><td>Total Harga</td><td>: Rp " . number_format($total, 0, ',', '.') . "</td></tr>";
        ?>
        <tr>
            <td colspan="2" align="center">
                <br>
                <a href="input.php">Kembali ke Awal</a>
            </td>
        </tr>
    </table>
</body>
</html>
