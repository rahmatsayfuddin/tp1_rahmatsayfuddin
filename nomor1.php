<!DOCTYPE html>
<html>
<head>
	<title>Perhitungan Grade Nilai</title>
</head>
<body>
	<?php
	$grade=''; 
	$teori='';
	$praktek='';
	$uas='';
	if (!empty($_GET)) {
		$teori=$_GET['teori'];
		$praktek=$_GET['praktek'];
		$uas=$_GET['uas'];
		$nilai=($teori+$uas+$praktek)/3;
		if ($nilai <= 45)
		{
			$grade ="E";
		}
		else if ($nilai <= 65)
		{
			$grade ="Nilai Anda $nilai, grade D";
		}
		else if ($nilai <=75){
			$grade ="nilai Anda $nilai, grade C";
		}
		else if ($nilai <=85){
			$grade ="nilai Anda $nilai, grade B";
		}
		else if ($nilai <=100)
		{
			$grade ="Nilai Anda $nilai, grade A";
		}
		else{
			$grade="Inputan Mungkin Salah, Silahkan Periksa Kembali";
		}
	}
	?>
	<form action="nomor1.php" method="GET">
		<input type="number" name="teori">
		<input type="number" name="praktek">
		<input type="number" name="uas">
		<input type="submit" value="Hitung">
	</form>
	Inputan 
	<p>Teori : <?php echo $teori ;?></p>
	<p>Praktek : <?php echo $praktek ;?></p>
	<p>Uas : <?php echo $uas ;?></p>
	<h5>Hasil Perhitungan Grade: </h5>
	<p><?php echo $grade ;?></p>
</body>
</html>

