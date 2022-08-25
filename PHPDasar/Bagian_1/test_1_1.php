<?php
// Nama : Frandito Setyady
// Nilai ujian sebuah kelas tersimpan dalam sebuah string berikut :
// $nilai = “72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86”;
// Buatlah sebuah PHP script untuk menentukan (1) nilai rata-rata, (2) 7 nilai tertinggi, (3) 7 nilai terendah dari nilai-nilai di atas.
$nilai = "72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86";
$pecah_nilai = explode(" ", $nilai);
$jml_nilai = sizeof($pecah_nilai);

// Jawaban Nilai Rata-rata
$total_nilai = 0;
for ($i = 0; $i < $jml_nilai; $i++) {
  $total_nilai += $pecah_nilai[$i];
}
$rata_rata = $total_nilai / $jml_nilai;
echo "Rata-rata nilai adalah " . number_format((float)$rata_rata, 2, '.', '');

// Jawaban 7 Nilai Tertinggi
rsort($pecah_nilai);
echo "\n7 Nilai Tertinggi adalah ";
for ($i = 0; $i < 7; $i++) {
  if ($i < 6) {
    echo $pecah_nilai[$i] . ", ";
  } else {
    echo $pecah_nilai[$i];
  }
}

// Jawaban 7 Nilai Terendah
sort($pecah_nilai);
echo "\n7 Nilai Terendah adalah ";
for ($i = 0; $i < 7; $i++) {
  if ($i < 6) {
    echo $pecah_nilai[$i] . ", ";
  } else {
    echo $pecah_nilai[$i];
  }
}

?>