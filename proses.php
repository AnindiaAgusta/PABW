<!DOCTYPE html>
<html>
<head>
<<<<<<< HEAD
	<title>Hasil Kalkulator Sederhana</title>
</head>
<body>
	<h2>Hasil Kalkulator Sederhana</h2>
	<?php
		$angka1 = $_POST["angka1"];
		$angka2 = $_POST["angka2"];
		$operator = $_POST["operator"];

		if ($operator == "tambah") {
			$hasil = $angka1 + $angka2;
			echo "<p>Hasil dari $angka1 + $angka2 adalah $hasil</p>";
		} elseif ($operator == "kurang") {
			$hasil = $angka1 - $angka2;
			echo "<p>Hasil dari $angka1 - $angka2 adalah $hasil</p>";
		} elseif ($operator == "kali") {
			$hasil = $angka1 * $angka2;
			echo "<p>Hasil dari $angka1 x $angka2 adalah $hasil</p>";
		} elseif ($operator == "bagi") {
			$hasil = $angka1 / $angka2;
			echo "<p>Hasil dari $angka1 / $angka2 adalah $hasil</p>";
		} else {
			echo "<p>Operator tidak dikenali</p>";
		}
=======
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
>>>>>>> origin/branch-6701210081
	?>
</body>
</html>
