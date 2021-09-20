<?php
	$jumlah_file = $_GET ['jumlah_file'];
		for($i=1; $i<=$jumlah_file; $i++){
			echo "file ke-$i : <input type =\"file\" name=\"namafile$i\"><br><br>";
		}
?>