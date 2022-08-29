<!DOCTYPE html>
<html>
<head>
<title>
Tugas 2 
</title>
<body>
<style>
body{
 background-color:lightblue;
 font-size:20px;
 
}
h1{
 color:blue;
}
.data1{
 color:purple;
 font-family:Arial;
}
.data2{
 color:green;
 font-family:Broadway;
}
.data3{
 color:red;
 font-family:Times New Roman;
}
</style>
<script>
        var nama = prompt("Siapa nama kamu?", "");
        document.write("<p>Hello "+ nama +"</p>"+" Ayo belajar macam-macam tipe data");
</script>

<?php
echo"<h1>3 Tipe Data</h1>";
?>

<div class="data1">
    <?php
    	echo"<h4>1. Tipe Data String</h4>";
    	echo"<h5>Tipe data string adalah tipe data yang digunakan untuk menyimpan teks.</h5>";
    	$nama="Veliana";
        $prodi="Teknik Informatika";
        echo "<b>Contoh : </b>Hai nama saya ".$nama. " dari Program Studi ".$prodi
    ?>
</div>
<br>
<hr>
<div class="data2">
    <?php
    	echo"<h4>2. Tipe Data Integer</h4>";
    	echo"<h5>Tipe data integer adalah tipe data yang digunakan untuk menyimpan bilangan bulat.</h5>";
    	$satu = 5;
		$dua = 10;
		$jumlah=$satu+$dua;
        echo"contoh: ";
        echo "Angka pertama: ".$satu."</br>";
        echo "Angka kedua: ".$dua."</br>";
		echo "hasil penjumlahan antara ".$satu." dan ".$dua." adalah : ".$jumlah;
		echo "<br>";

    ?>
</div>
<br>
<hr>
<div class="data3">
    <?php
    	echo"<h4>3. Tipe Data Float</h4>";
    	echo"<h5>Tipe data float adalah tipe data yang digunakan untuk menyimpan bilangan desimal</h5>";

$nilaiTugas = 80.7;
$nilaiUTS = 85.4;
$nilaiUAS = 87.8;
echo"contoh: <br>";
$nilaiakhir = ($nilaiTugas + $nilaiUTS + $nilaiUAS) / 3;

# Tampilkan data

echo "Nilai Tugas: {$nilaiTugas} <br>";
echo "Nilai UTS: {$nilaiUTS} <br>";
echo "Nilai UAS: {$nilaiUAS} <br>";
echo "Nilai Akhir: {$nilaiakhir} <br>";

    ?>
</div>
<?php

?>

</body>
</html>
