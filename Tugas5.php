<?php
$pemasukan = 50000000;
$hutangA = 16500000;
$hutangB = 9500000;
$bungaA = 0.05;
$bungaB = 0.045;
$periode = 1;

$bungaSiA = $hutangA * $bungaA / 12; 
$bungaSiB = $hutangB * $bungaB / 12;
$BayarA = $hutangA + ($bungaSiA * $periode);
$BayarB = $hutangB + ($bungaSiB * $periode);
$sisaUang = $pemasukan - ($BayarA + $BayarB);
$totalBunga = $bungaSiA + $bungaSiB;
$totalHutang = $BayarA + $BayarB;

echo "Pemasukan: Rp ". number_format($pemasukan). "<br>";
echo "Hutang A: Rp " . number_format($hutangA) . "<br>";
echo "Hutang B: Rp " . number_format($hutangB) . "<br>";
echo "Persentase bunga A: " . ($bungaA * 100) . "%<br>";
echo "Persentase bunga B: " . ($bungaB * 100) . "%<br>";
echo "periode: " . number_format($periode) . "bulan" . "<br>";
echo "====================". "<br>";
echo "Bunga A: Rp " . number_format($bungaSiA) . "<br>";
echo "Bunga B: Rp " . number_format($bungaSiB) . "<br>";
echo "Total bayar hutang A: Rp " . number_format($BayarA) . "<br>";
echo "Total bayar hutang B: Rp " . number_format($BayarB) . "<br>";
echo "========Hasil========". "<br>";
echo "Sisa uang: Rp". number_format($sisaUang)."<br>";
echo "Jumlah total bunga hutang: Rp". number_format($totalBunga)."<br>";
echo "Jumlah total hutang: Rp". number_format($totalHutang)."<br>";
?>
