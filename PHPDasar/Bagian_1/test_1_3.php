<?php
// Nama : Frandito Setyady
// Buatlah sebuah fungsi dalam PHP untuk membentuk unigram, bigram, trigram dari sebuah string.
// Contoh : bila fungsi diberikan input “Jakarta adalah ibukota negara Republik Indonesia”, maka akan menghasilkan output :
// Jawaban
function stringGram($kalimat)
	{
		$pecah_kalimat = explode(' ', $kalimat);

		// ● Unigram : jakarta, adalah, ibukota, negara, republik, indonesia
		$unigram = '';
		foreach ($pecah_kalimat as $pecah_kata) {
			$unigram .= $pecah_kata.', ';
		}
		$unigram = substr($unigram, 0, -2);

    // ● Bigram : jakarta adalah, ibukota negara, republik indonesia
    $i = 0;
		$bigram = '';
		foreach ($pecah_kalimat as $pecah_kata) {
			if ($i < 1) {
				$bigram .= $pecah_kata.' ';
				$i++;
			} else {
				$bigram .= $pecah_kata.', ';
				$i = 0;
			}
		}
		$bigram = substr($bigram, 0, -2);

    // ● Trigram : jakarta adalah ibukota, negara republik indonesia
    $j = 0;
		$trigram = '';
		foreach ($pecah_kalimat as $pecah_kata) {
			if ($j < 2) {
				$trigram .= $pecah_kata.' ';
				$j++;
			} else {
				$trigram .= $pecah_kata.', ';
				$j = 0;
			}
		}
		$trigram = substr($trigram, 0, -2);


		$hasil = "\n".'Unigram : '. $unigram ."\n";
		$hasil .= 'Bigram : '. $bigram . "\n";
		$hasil .= 'Trigram : '. $trigram;

		echo $hasil;
	}

  stringGram('Jakarta adalah ibukota negara Republik Indonesia');
?>