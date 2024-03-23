<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
	include("baglanti.php");
?>
<table border="1" cellpadding="5" cellspacing="0">
	<tr>
		<td>Adı</td>
		<td>Soyadı</td>
		<td>Sınıfı</td>
		<td>Resim</td>
		<td>Güncelle</td>
		<td>Sil</td>
	</tr>

<?php 
	$kayitlar = $db->query("SELECT * FROM ogrenciler",PDO::FETCH_ASSOC);
	foreach ($kayitlar as $kayit) {
		echo '<tr>
		<td>'.$kayit['adi'].'</td>
		<td>'.$kayit['soyadi'].'</td>
		<td>'.$kayit['sinifi'].'</td>
		<td><img src="resimler/'.$kayit['resim'].'" width="150"></td>
		<td><a href="guncelledetay.php?guncelleid='.$kayit['id'].'">Güncelle</td>
		<td><a href="verisilguncelle.php?silid='.$kayit['id'].'&resim='.$kayit['resim'].'" onclick="return confirm(\'Silmek istediğinizden emin misiniz?\')">Sil</a></td>
		</tr>';
	}
?>
</table>
<table>
	<?php
		if (isset($_GET['silid']) && $_GET['silid']!="") {
			$silid = $_GET['silid'];
			$resim = $_GET['resim'];
			unlink("resimler/$resim");
			$kontrol = $db->query("DELETE FROM ogrenciler WHERE id = '$silid'");
			if ($kontrol->rowCount()==1) {
			 	echo 'kayıt silindi';
			 	header("refresh:2,url=verisilguncelle.php");
			}
			else{
				echo 'tekrar deneyin';
			}
		}
	?>
</table>
</body>
</html>
