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
	if (!isset($_GET['guncelleid'])) {
		header("Location:verisilguncelle.php");
	}
	else{
		$guncelleid = $_GET['guncelleid'];
		$bilgiler = $db->query("SELECT * FROM ogrenciler WHERE id = '$guncelleid'",PDO::FETCH_ASSOC);
		foreach ($bilgiler as $bilgi) {
			echo '<form method="post" enctype="multipart/form-data">
			<table align="center">
			<tr>
				<td>Adı</td>
				<td><input type="text" name="adi" value="'.$bilgi['adi'].'" autocomplete="off"></td>
			</tr>
			<tr>
				<td>Soyadı</td>
				<td><input type="text" name="soyadi" value="'.$bilgi['soyadi'].'" autocomplete="off"></td>
			</tr>
			<tr>
				<td>Sınıfı</td>
				<td><input type="text" name="sinifi" value="'.$bilgi['sinifi'].'" autocomplete="off"></td>
			</tr>
			<tr>
				<td>Resim</td>
				<td><input type="file" name="resim"></td>
			</tr>
			<tr>
				<td>Anne Adı</td>
				<td><input type="text" name="anne" value="'.$bilgi['anne'].'" autocomplete="off"></td>	
			</tr>
			<tr>
				<td>Baba Adı</td>
				<td><input type="text" name="baba" value="'.$bilgi['baba'].'" autocomplete="off"></td>
			</tr>
			<tr>
				<td>Telefon</td>
				<td><input type="text" name="telefon" value="'.$bilgi['telefon'].'" autocomplete="off"></td>
			</tr>
			<tr>
				<td>Adres</td>
				<td><textarea rows="3" name="adres" value="'.$bilgi['adres'].'" autocomplete="off"></textarea></td>
			</tr>
			<tr>
				<td><input type="submit" name="guncelle" value="GÜNCELLE"></td>
				<td></td>
			</tr>
			</table>
			</form>';
		}
	}
	if (isset($_POST['guncelle'])) {
		$guncelleid = $_GET['guncelleid'];
		$adi=trim($_POST['adi']);
		$soyadi = trim($_POST['soyadi']);
		$sinifi = trim($_POST['sinifi']);
		$anne = trim($_POST['anne']);
		$baba = trim($_POST['baba']);
		$telefon = trim($_POST['telefon']);
		$adres = trim($_POST['adres']);
		$resimadi = $_FILES['resim']['name'];
		$resimyol = $_FILES['resim']['tmp_name'];
		$uzanti = @end(explode('.',$resimadi));
		$yeniresimadi = uniqid(). "." .$uzanti ;
		$uzantilar =array("jpg","png","jpeg","gif","bmp");

		if ($adi=="" or $soyadi=="" or $sinifi=="" or $anne=="" or $baba=="" or $baba=="" or $adres=="") {
			echo "lütfen tüm alanları doldurunuz";
		}
		else{
			if ($resimadi=="") {
				$kontrol = $db->query("UPDATE ogrenciler SET adi='$adi',soyadi = '$soyadi',sinifi= '$sinifi',anne =  '$anne', baba = '$baba', telefon = '$telefon',adres = '$adres' WHERE id = '$guncelleid'");

				if ($kontrol->rowCount() == 1) 
				{
					echo "Güncellendi";
				}
				else 
				{
					echo "Güncellenemedi. Tekrar deneyin";
				}
			}
		}
	}
?>
</body>
</html>
