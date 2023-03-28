<!DOCTYPE html>
<html>
<head>
	<title>Hasil Perhitungan</title>
</head>
<body>
	<?php
		//mengambil nilai dari form
		$angka1 = $_POST['angka1'];
		$angka2 = $_POST['angka2'];
		$operasi = $_POST['operasi'];

		//melakukan operasi aritmatika sesuai dengan nilai pada dropdown
		switch ($operasi) {
			case 'tambah':
				$hasil = $angka1 + $angka2;
				break;
			case 'kurang':
				$hasil = $angka1 - $angka2;
				break;
			case 'kali':
				$hasil = $angka1 * $angka2;
				break;
			case 'bagi':
				$hasil = $angka1 / $angka2;
				break;
			default:
				echo "Pilih operasi terlebih dahulu";
				return;
		}

		//menampilkan hasil perhitungan
		echo "Hasil perhitungan dari $angka1 $operasi $angka2 adalah $hasil";
	?>
</body>
</html>
