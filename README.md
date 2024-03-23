<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Öğrenci DETAY</title>
</head>
<body>
<?php
include("baglanti.php");

if (isset($_GET['id'])) 
{
	$id = $_GET['id'];
	$ogrenci = $db->query("SELECT * FROM ogrenciler WHERE id='$id'",PDO::FETCH_ASSOC);
	if ($ogrenci->RowCount()==1)
	{
		foreach ($ogrenci as $ogr) {
			echo '<img src="resimler/'.$ogr['resim'].'" width="200">'."<br>";
			echo $ogr['adi']."<br>";
			echo $ogr['soyadi']."<br>";
			echo $ogr['sinifi']."<br>";
			echo $ogr['anne']."<br>";
			echo $ogr['baba']."<br>";
			echo $ogr['telefon']."<br>";
			echo $ogr['adres']."<br>";

		}
	}
	else
	{
		header("Location:verilisteleme.php");
	}
}
else
{
	header("Location:verilisteleme.php");
}

?>
</body>
</html>
