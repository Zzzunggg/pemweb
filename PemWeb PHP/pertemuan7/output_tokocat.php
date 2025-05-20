<html>
<head>
<title>Biodata</title>
</head>
<body>
<?php
$Nama=$_POST['Nama'];
$Alamat=$_POST['Alamat'];
$Jenis=$_POST['jenis_cat'];
$warna=$_POST['warna'];
$jumlah=$_POST['Jumlah_beli'];
?>
<h1> TOKO CAT GUNA BANGUN JAYA </h1>
<h1>================================</h1>
<table border="0" cellpadding="5" cellspacing="0">
<tr>
<td>Nama Customer</td>
<td> <?php echo $Nama ?> </td>
</tr>
<tr>
<td>Alamat</td>
<td> <?php echo $Alamat ?> </td>
</tr>
<tr>
<td>Jenis Cat</td>
<td> <?php echo $Jenis ?> </td>
</tr>
<tr>
<td>Warna</td>
<td> <?php echo $warna ?> </td>
</tr>
<?php
if ($_POST['jenis_cat']=='Mowilex')
{$harga="20000";}
else if ($_POST['jenis_cat']=='Danapsint')
{$harga="30000";}
else
{$harga="40000";}
?>
<tr>
<td>Harga</td>
<td> <?php echo $harga ?></td>
</tr>
<tr>
<td>Jumlah Beli</td>
<td> <?php echo $jumlah ?> </td>
</tr>
<?php
$total=$harga*$jumlah;
?>
<tr>
<td>Total Harga</td>
<td> <?php echo $total ?> </td>
</tr>
<?php
if ($_POST['Jumlah_beli']>=5)
{$diskon=0.05*$total;}
else if ($_POST['Jumlah_beli']>=10)
{$diskon=0.1*$total;}
else
{$diskon='0';}
?>
<tr>
<td>Diskon</td>
<td> <?php echo $diskon ?> </td>
</tr>
<?php
$totalbayar=$total-$diskon;
?>
<tr>
<td> Total Bayar </td>
<td><?php echo $totalbayar ?></td>
</tr>
</tr>
</table>
<a href="input_tokocat.php">Kembali ke awal</a>
</body>
</html>