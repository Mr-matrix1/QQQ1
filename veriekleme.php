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
<form method="post" enctype="multipart/form-data">
		<table align="center">
				<tr>
					<td>Adı</td> 
					<td><input type="text" name="adi"  autocomplete="off"></td>
				</tr>
				<tr>
					<td>Soyadı</td> 
					<td><input type="text" name="soyadi"   autocomplete="off"></td>
				</tr>
				<tr>
					<td>Sınıfı</td> 
					<td><input type="text" name="sinifi"   autocomplete="off"></td>
				</tr>
				<tr>
					<td>Resim </td> 
					<td><input type="file" name="resim" ></td>
				</tr>
				<tr>
					<td>Anne Adı</td> 
					<td><input type="text" name="anne"   autocomplete="off"></td>
				</tr>
				<tr>
					<td>Baba Adı</td> 
					<td><input type="text" name="baba"   autocomplete="off"></td>
				</tr>
				<tr>
					<td>Telefon</td> 
					<td><input type="text" name="telefon"   autocomplete="off"></td>
				</tr>
				<tr>
					<td>Adres</td> 
					<td><textarea rows="3" name="adres" id="adres" autocomplete="off"></textarea></td>
				</tr>
				
				<tr>
					<td><input type="submit" name="kaydet" value="KAYDET"></td>
					<td><?php
						if (isset($_POST['kaydet'])) {
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

							if (in_array($uzanti,$uzantilar)) 
							{
								$resimkontrol = move_uploaded_file($resimyol, "resimler/$yeniresimadi");
								if ($resimkontrol) 
								{
									if ($adi=="" or $soyadi=="" or $sinifi=="" or $anne=="" or $baba=="" or $telefon=="" or $adres=="") 
									{
										echo "Lütfen tüm alanları doldurunuz";
									}
									else 
									{
										$kontrol = $db->query("INSERT INTO ogrenciler VALUES (null, '$adi','$soyadi','$sinifi', '$yeniresimadi' , '$anne', '$baba', '$telefon', '$adres')");

											if ($kontrol->rowCount() == 1) 
											{
												echo "Kayıt yapıldı";
											}
											else 
											{
												echo "Kayıt yapılamadı. Tekrar deneyin";
											}
									}
								}
								else 
								{
									echo "Resim yüklenemedi tekrar deneyin";
								}
							}
							else
							{
								echo "Yalnızca resim dosyaları eklenebilir.";
							}
						}
				?></td>
				</tr>
				<tr>
					<td></td> 
					<td><a href="verilisteleme.php">Veri Listeleme</a></td>
				</tr>
				
		</table>
	</form>

</body>
</html>
