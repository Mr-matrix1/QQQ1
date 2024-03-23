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
			<td>Detay</td>
		</tr>
	<?php
		$kayitlar = $db->query("SELECT * FROM ogrenciler ORDER BY id desc ",PDO::FETCH_ASSOC);
		foreach ($kayitlar as $kayit) {
				echo '<tr>
			<td>'.$kayit['adi'].'</td>
			<td>'.$kayit['soyadi'].'</td>
			<td>'.$kayit['sinifi'].'</td>
			<td><img src="resimler/'.$kayit['resim'].'" width="100" height="75"></td>
			<td><a href="detay.php?id='.$kayit['id'].'">İncele</a></td>
		</tr>';
			
		}

	?>
	</table>
</body>
</html>
