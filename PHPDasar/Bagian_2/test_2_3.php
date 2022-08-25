<?php
// Nama : Frandito Setyady
// Buatlah sebuah fungsi dalam PHP untuk melakukan pencarian kata dalam array di dibawah.
// Jawaban
$arr = [
    ['f', 'g', 'h', 'i'],
    ['j', 'k', 'p', 'q'],
    ['r', 's', 't', 'u']
];

function cari($arrays, $str): bool
{
    $arrStr = str_split($str);
    $arrayIdx = 0;

    $arrayCocok = [];

    foreach ($arrays as $index => $array) {
        $arrayIdx = $index;
        foreach ($arrStr as $str) {
            if (($arrayIndex = array_search($str, $array)) !== false) {
                $arrayCocok[] = [
                    'str' => $str,
                    'arrayIdx' => $arrayIdx,
                    'arrayIndex' => $arrayIndex,
                    'arrayLength' => count($array),
                ];
            }
        }
    }
    $nilai = 0;
    if (count(array_count_values(array_column($arrayCocok, 'arrayIdx'))) === 1) {
        $nilai = count(array_unique($arrayCocok, SORT_REGULAR));
    } else {
        foreach (array_unique($arrayCocok, SORT_REGULAR) as $arrMatch) {
            if ($arrMatch["arrayIndex"] !== ($arrMatch["arrayLength"] - 1)) {
                $nilai += 1;
            }
        }
    }
    if ($nilai > 3) {
        return true;
    }
    return false;
}

echo "\n cari(\$arr, 'fghi') : " . (cari($arr, 'fghi') ? 'true' : 'false'); // true
echo "\n cari(\$arr, 'fst') : " . (cari($arr, 'fst') ? 'true' : 'false'); // false
echo "\n cari(\$arr, 'fghp') : " . (cari($arr, 'fghp') ? 'true' : 'false'); // true
echo "\n cari(\$arr, 'pqr') : " . (cari($arr, 'pqr') ? 'true' : 'false'); // false
echo "\n cari(\$arr, 'fjrstp') : " . (cari($arr, 'fjrstp') ? 'true' : 'false'); // true
echo "\n cari(\$arr, 'fghh') : " . (cari($arr, 'fghh') ? 'true' : 'false'); // false
echo "\n cari(\$arr, 'fghq') : " . (cari($arr, 'fghq') ? 'true' : 'false'); // false
?>