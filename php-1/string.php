<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>String PHP</title>
</head>
<body>
<h1>Berlatih String PHP</h1>
<?php
echo "<h3> Soal No 1</h3>"; 
/* SOAL NO 1 Tunjukan dengan menggunakan echo berapa panjang dari string yang diberikan berikut! Tunjukkan juga jumlah kata di dalam kalimat tersebut!
Contoh: $string = "PHP is never old"; Output: Panjang string: 16, Jumlah kata: 4
*/
$first_sentence = "Hello PHP!" ; 
echo "<label>String: </label> \"$first_sentence\" <br>";
$panjang_string = strlen($first_sentence);// Panjang string 10, jumlah kata: 2
$panjang_kata = str_word_count($first_sentence);

echo "Panjang String: ".$panjang_string."<br>";;
echo "Panjang kata: ".$panjang_kata."<br>"."<br>";

$second_sentence = "I'm ready for the challenges"; // Panjang string: 28, jumlah kata: 5 echo "<h3> Soal No 2</h3>"; 
echo "<label>String: </label> \"$second_sentence\" <br>";
$panjang_string_second_sentence = strlen($second_sentence);// Panjang string 10, jumlah kata: 2
$panjang_kata_second_sentence = str_word_count($second_sentence);

echo "Panjang String: ".$panjang_string_second_sentence."<br>";;
echo "Panjang kata: ".$panjang_kata_second_sentence."<br>"."<br>";

//* SOAL NO 2 Mengambil kata pada string dan karakter-karakter yang ada di dalamnya. */
$string2 = "I love PHP"; 
echo "<label>String: </label> \"$string2\" <br>"; 
echo "Kata pertama: " . substr($string2, 0, 1) . "<br>" ;
echo "Kata kedua: " . substr($string2, 2, 4) . "<br>" ;
echo "Kata ketiga: " . substr($string2, 6, 8) . "<br>"."<br>" ;

// Lanjutkan di bawah ini 
echo "<h3> Soal No 3 </h3>"; /* SOAL NO 3 Mengubah karakter atau kata yang ada di dalam sebuah string. */
$string3 = "PHP is old but sexy!";

echo "String: \"$string3\" "."<br>"."<br>"; // OUTPUT : "PHP is old but awesome" 

// Array containing search string
    $kata_before_ubah = array("sexy!");
    $kata_after_ubah = array("awesome");

  // Function to replace string
$ubah_karekter = str_replace($kata_before_ubah,$kata_after_ubah,$string3);
echo "Kata Setelah Di ubah: \"$ubah_karekter\" ";
?>
</body>
</html>