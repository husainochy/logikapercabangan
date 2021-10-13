<?php
// 1. Barang ada 3, harganya (20.000, 30.000, 50.000)
// 2. Diskon barang 3: 20%
// 3. Ketika total bayar > 75.000 dapat diskon 15%
// 4. Diskon hanya boleh salah satu, dipilih diskon yang terbesar
// 5. Hitung jumlah bayar

$barang1 = 20000;
$barang2 = 30000;
$barang3 = 50000;

$keranjangBarang = [$barang1, $barang1, $barang2, $barang2];
$totalBarang = count($keranjangBarang);

$diskon = null;
$totalBayar = 0;

foreach ($keranjangBarang as $index => $barang) {
  $totalBayar = $barang + $totalBayar;
}

echo "Total bayar awal {$totalBayar} <br>";

if (in_array($barang3, $keranjangBarang)) {
  
  $totalBrgKetiga = array_search($barang3, $keranjangBarang);
  $diskon = ($totalBrgKetiga * $barang3) * 20/100;

}else if ($totalBayar >= 75000){
  
  $diskon = $totalBayar * 15/100;

}else {
  
  $diskon = 0;
}

$totalBayar = $totalBayar - $diskon;

echo "Diskon {$diskon} <br>";
echo "Total Bayar {$totalBayar} <br>";

?>