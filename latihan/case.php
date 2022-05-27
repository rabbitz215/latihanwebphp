<!-- 
Stok = 0 Habis
Stok < 40 Merah
Stok < 80 Kuning
Stok > 100 Hijau 
-->

<?php
$stok = 80;
if ($stok == 0) {
    $ket = "Habis";
} else if ($stok < 40) {
    $ket = "Merah";
} else if ($stok < 80) {
    $ket = "Kuning";
} else if ($stok < 100) {
    $ket = "Hijau";
} else {
    $ket = "Stok Salah";
}
echo $ket;
?>