<?php
	$a	=$_GET ['a'];
	$b	=$_GET ['b'];
	$operasi = $_GET ['operasi'];

	echo "Nilai A : $a <br>";
	echo "Nilai B : $b <br>";

		switch ($operasi) {
			default;
				echo "Anda Belum Memilih Operasi Perhitungan dengan Benar";
			break;
			case "jumlah":
				$c = $a + $b;
				echo "Penjumlahan $a + $b = $c";
				break;
			case "kurang":
				$c = $a - $b;
				echo "Pengurangan $a - $b = $c";
				break;
			case "kali":
				$c = $a * $b;
				echo "Perkalian $a X $b = $c";
				break;
			case "bagi":
				$c = $a / $b;
				echo "Pembagian $a / $b = $c";
				break;
		}
?>