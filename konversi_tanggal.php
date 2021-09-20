<?php
// Format penanggalan di database MYSQL
$tanggal=date("Y-m-d");

// Ambil atau pisahkan tanggal, bulan dan tahun
$ambiltahun = substr($tanggal,0,4);
$ambilbulan = substr($tanggal,5,2);
$ambiltanggal = substr($tanggal,8,2);

// ubah angka bulan menjadi nama bulan
if ($ambilbulan=="01") $namabulan="Januari";
elseif ($ambilbulan=="02") $namabulan="Februari";
elseif ($ambilbulan=="03") $namabulan="Maret";
elseif ($ambilbulan=="04") $namabulan="April";
elseif ($ambilbulan=="05") $namabulan="May";
elseif ($ambilbulan=="06") $namabulan="Juni";
elseif ($ambilbulan=="07") $namabulan="July";
elseif ($ambilbulan=="08") $namabulan="Agustus";
elseif ($ambilbulan=="09") $namabulan="September";
elseif ($ambilbulan=="10") $namabulan="Oktober";
elseif ($ambilbulan=="11") $namabulan="November";
elseif ($ambilbulan=="12") $namabulan="Desember";

echo "Format Tanggal Inggris : $tanggal <br><br>";
echo "Format Tanggal Indonesia : $ambiltanggal-$namabulan-$ambiltahun";
?>