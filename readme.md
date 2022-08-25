# Test Transisi Back-End Laravel

## Bagian 1 PHP Dasar
Terdapat pada folder "**PHP Dasar**"

● Nilai ujian sebuah kelas tersimpan dalam sebuah string berikut :

$nilai = “72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86”;

Buatlah sebuah PHP script untuk menentukan (1) nilai rata-rata, (2) 7 nilai tertinggi, (3) 7 nilai terendah dari nilai-nilai di atas.

Jawaban terdapat pada file

`Bagian_1 > test_1_1.php`



● Buatlah sebuah fungsi dalam PHP untuk menentukan jumlah huruf kecil dalam sebuah string.

Contoh : bila fungsi diberikan input “TranSISI” maka akan menghasilkan output : “TranSISI mengandung 3 buah huruf kecil.

Jawaban terdapat pada file

`Bagian_1 > test_1_2.php`

● Buatlah sebuah fungsi dalam PHP untuk membentuk unigram, bigram, trigram dari sebuah string.

Contoh : bila fungsi diberikan input “Jakarta adalah ibukota negara Republik Indonesia”, maka akan menghasilkan output :

● Unigram : jakarta, adalah, ibukota, negara, republik, indonesia

● Bigram : jakarta adalah, ibukota negara, republik indonesia

● Trigram : jakarta adalah ibukota, negara republik indonesia

Jawaban terdapat pada file

`Bagian_1 > test_1_3.php`

## PHP Dasar Bagian 2
Terdapat pada folder "**PHP Dasar**"

● Buatlah sebuah fungsi dalam PHP, yang apabila dipanggil akan menampilkan pola tabel  :

Jawaban terdapat pada file

`Bagian_2 > test_2_1.php`

● Buatlah sebuah fungsi “enkripsi”, yang apabila diberikan input DFHKNQ akan memberikan output EDKGSK

Jawaban terdapat pada file

`Bagian_2 > test_2_2.php`

● Buatlah sebuah fungsi dalam PHP untuk melakukan pencarian kata dalam array 

Jawaban terdapat pada file

`Bagian_2 > test_2_3.php`

## Bagian 2 Laravel Dasar

### Prasyarat : 

* Composer [link](https://getcomposer.org/download/)
* PHP >= 7.4
* MySQL >= 5.7
* Terminal / CMD / GitBash
* Text Editor (VS Code, Sublime, dll)

### Langkah menjalankan Laravel Project

1. Download dan Ekstrak Hasil Git Clone
2. Buka Terminal / GitBash dan arahkan ke hasil ekstrak dari file Git Clone
3. ketikan perintah
```bash
composer install
```
4. Buat Database Pada MySQL dengan nama bebas
5. Buka File .env dengan TextEditor lalu isikan sesuai dengan nama Database, Username, Password dan Host
6. Simpan file .env dan jalankan perintah pada terminal
```bash
php artisan migrate:fresh --seed
```
7. Jalankan perintah storage link agar media dapat diakses
```bash
php artisan storage:link
``` 
8. Selanjutnya aktifkan server Laravel dengan perintah
```bash
php artisan serve
``` 
9. Buka Browser dan arahkan ke url http://127.0.0.1:8000