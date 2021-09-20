Hobby yang Kamu Pilih :<br>
<?php
$hobby=$_GET['hobby'];
$jumlah_hobby=count($hobby);
    for($indeks=0; $indeks<$jumlah_hobby; $indeks++) {
        echo "$hobby[$indeks] <br>";
    }
?>