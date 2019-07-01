<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>
	<!-- <form> -->
		Bil 1 <input type="number" id="bil1">
		<br>
		Bil 2 <input type="number" id="bil2">
		<br>
		Hasil <input type="number" id="hasil" disabled="">
		<br>
		<br>
		<input type="submit" name="+" value="+" onclick="hitung('+');">
		<input type="submit" name="-" value="-" onclick="hitung('-');">
		<input type="submit" name="X" value="X" onclick="hitung('X');">
		<input type="submit" name="/" value="/" onclick="hitung('/');">
		<!-- </form> -->
		<script type="text/javascript">
			function hitung(operator) {
				var bil1=document.getElementById('bil1').value;
				var bil2=document.getElementById('bil2').value;
				if (operator=='+') {
					document.getElementById('hasil').value=
					parseFloat(bil1)+parseFloat(bil2);
				}
				else if (operator=='-') {
					document.getElementById('hasil').value=parseFloat(bil1)-parseFloat(bil2);
				}
				else if (operator=='X') {
					document.getElementById('hasil').value=parseFloat(bil1)*parseFloat(bil2);
				}
				else if (operator=='/') {
					document.getElementById('hasil').value=parseFloat(bil1)/parseFloat(bil2);
				}
			}
		</script>
	</body>
	</html>