<?php
// Nama : Frandito Setyady
// Buatlah sebuah fungsi “enkripsi”, yang apabila diberikan input DFHKNQ akan memberikan output EDKGSK
// Jawaban
function enkripsi($string)
{
    $output = "";

    $inputArr = str_split($string);
    $jml = sizeof($inputArr);
    for ($i = 0; $i < $jml; $i++) {
        if ($i % 2 == 0) {
            $offset = ord($inputArr[$i]);
            $hasil = chr(fmod(((ord($inputArr[$i]) + $i + 1) - $offset), 26) + $offset);
        } else {
            $offset = ord($inputArr[$i]);
            $hasil = chr(fmod(((ord($inputArr[$i]) - $i - 1) - $offset), 26) + $offset);
        }
        $output .= $hasil;
    }

    echo "\n". $output;
}
enkripsi("DFHKNQ");
?>