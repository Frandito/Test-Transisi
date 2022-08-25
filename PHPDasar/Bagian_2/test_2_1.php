<?php
// Nama : Frandito Setyady
// Membuat fungsi untuk menampilkan pola Tabel
// Jawaban
function polaTabel()
{
    echo '<!DOCTYPE html>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <head>
    <style>
    td {text-align: center;}
    .hitam {background-color: black;color: white;} 
    .putih {background-color: white;color: black;}
    </style>
    </head>
    <body>
      <table border=0 cellspacing=0>
        <tbody>';
    $z = 1;
    for ($x = 1; $x <= 8; $x++){
        echo '<tr>';
        for ($y = 1; $y <= 8; $y++){
            echo '<td width=40 height=40 class="';
            echo ($z % 3 === 0 || $z % 4 === 0) ? 'putih' : 'hitam';
            echo '">';
            echo $z;
            echo '</td>';
            $z++;
        }
        echo '</tr>';
    }
    echo '</tbody></table></body>';
    echo '</html>';
}
polaTabel();
?>