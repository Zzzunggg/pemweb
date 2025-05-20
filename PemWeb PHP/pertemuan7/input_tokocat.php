<html>
<head>
<title>Biodata</title>
</head>
<body>
<table border=0>
<form action="output_tokocat.php" method="POST">
<h1> TOKO CAT GUNA BANGUN JAYA </h1>
<tr>
<td>Nama Customer</td>
<td>:</td>
<td><input type=text name=Nama></td>
</tr>
<tr>
<td>Alamat</td>
<td>:</td>
<td><input type=text name=Alamat></td>
</tr>
<tr>
<td>Jenis Cat</td>
<td>:</td>
<td>
<select name=jenis_cat>
<option value="Mowilex">Mowilex
<option value="Danapaint">Danapaint
<option value="Catylac">Catylac
</select>
</td>
</tr>
<tr>
<td>Warna Cat</td>
<td>:</td>
<td>
<input type=radio name="warna" value="Merah">Merah
<input type=radio name="warna" value="Biru">Biru
<input type=radio name="warna" value="Kuning">Kuning
</td>
</tr>
<tr>
<td>Jumlah Beli</td>
<td>:</td>
<td><input type=text name=Jumlah_beli></td>
</tr>
<tr>
<td> </td>
<td> </td>
<td><input type="submit" name="submit" value="Submit">
<input type="reset" name="reset" value="Cancel"></td>
</tr>
</form>
</table>
</body>
</html>