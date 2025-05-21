<!DOCTYPE html>
<html>
<head>
    <title>Input</title>
</head>
<body>
    <h2 align="center">KONSER AMAL INDAHNYA BERBAGI</h2>
    <form action="output.php" method="post">
        <table align="center">
            <tr>
                <td>Nama Pemesanan</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Kode Studio</td>
                <td>
                    <select name="studio">
                        <option value="Studio 1">Studio 1</option>
                        <option value="Studio 2">Studio 2</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jenis Kelas</td>
                <td>
                    <input type="radio" name="kelas" value="VIP"> VIP
                    <input type="radio" name="kelas" value="Festival"> Festival
                </td>
            </tr>
            <tr>
                <td>Jumlah Tiket</td>
                <td><input type="number" name="jumlah"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Tampil">
                    <input type="reset" value="Batal">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
