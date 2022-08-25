<?php
// Nama : Frandito Setyady
// Buatlah sebuah fungsi dalam PHP untuk menentukan jumlah huruf kecil dalam sebuah string.
// Contoh : bila fungsi diberikan input “TranSISI” maka akan menghasilkan output : “TranSISI” mengandung 3 buah huruf kecil.
// Jawaban
function hurufKecil($string) {
  $jml_huruf_kecil = preg_match_all("/[a-z]/", $string);

  echo "\n".'"'.$string.'" '.'mengandung '.$jml_huruf_kecil.' buah huruf kecil.';
}

hurufKecil('TranSISI');

?>