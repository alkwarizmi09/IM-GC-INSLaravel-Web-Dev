<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>
</head>

<body>
    <h1>Berlatih Function PHP</h1>
    <?php
    echo "<h3> Soal No 1 Greetings </h3>";

    echo "===================== <br>";
    // Membuat fungsi greetings
    function greetings($name)
    {
        echo "Halo $name, Selamat Datang di Garuda Cyber Institute!<br>";
    }

    // Memanggil fungsi greetings dengan beberapa nama
    greetings("Bagas");
    greetings("Wahyu");
    greetings("nama peserta");

    echo "=====================<br>";
    /*
Soal No 1 
Greetings 
Buatlah sebuah function greetings() yang menerima satu parameter berupa string. 
contoh: greetings("abduh"); 
Output: "Halo Abduh, Selamat Datang di Garuda Cyber Institute!" 
*/
    // Code function di sini 
    // Hapus komentar untuk menjalankan code! 
    // greetings("Bagas"); 
    // greetings("Wahyu"); 
    // greetings("nama peserta");
    echo "<br>";
    echo "<h3>Soal No 2 Reverse String</h3>";
    // Membuat fungsi reverseString
    function reverseString($str)
    {
        $reversed = ""; // Inisialisasi string kosong untuk menampung hasil
        $length = strlen($str); // Menghitung panjang string

        // Looping dari akhir string ke awal
        for ($i = $length - 1; $i >= 0; $i--) {
            $reversed .= $str[$i]; // Menambahkan karakter ke string yang dibalik
        }

        echo $reversed . "<br>"; // Menampilkan string yang sudah dibalik
    }

    // Memanggil fungsi reverseString dengan beberapa contoh string
    reverseString("nama peserta");
    reverseString("Garuda Cyber Institute");
    reverseString("We Are GC-Ins Developer");

    echo "<br>";
    /*
Soal No 2 
Reverse String 
Buatlah sebuah function reverseString() untuk mengubah string berikut menjadi kebalikannya menggunakan function dan looping (for/while/do while). Function reverseString menerima satu parameter berupa string. 
NB: DILARANG menggunakan built-in function PHP sepert strrev(), HANYA gunakan LOOPING! 
reverseString("abdul"); 

function reverseString($str) {
    $reversed = ""; // Inisialisasi string kosong untuk menampung hasil
    $length = strlen($str); // Menghitung panjang string

    // Looping dari akhir string ke awal
    for ($i = $length - 1; $i >= 0; $i--) {
        $reversed .= $str[$i]; // Menambahkan karakter ke string yang dibalik
    }

    return $reversed;
}

// Memanggil fungsi reverseString dengan beberapa contoh string
echo reverseString("abdul") . "<br>"; // Output: ludba
echo reverseString("nama peserta") . "<br>";
echo reverseString("Garuda Cyber Institute") . "<br>";
echo reverseString("We Are GC-Ins Developer") . "<br>";
Output: ludba 
*/

    // Code function di sini 
    // Hapus komentar di bawah ini untuk jalankan Code 
    // reverseString("nama peserta"); 
    // reverseString("Garuda Cyber Institute"); 
    // reverseString("We Are GC-Ins Developer") echo 

    echo "<h3>Soal No 3 Palindrome </h3>";

    function palindrome($str)
    {
        $reversed = reverseString($str); // Gunakan fungsi reverseString dari Soal No 2 untuk membalik string

        // Cek apakah string asli sama dengan string yang dibalik
        if ($str == $reversed) {
            return "true<br>";
        } else {
            return "false<br>";
        }
    }

    // Memanggil fungsi palindrome dengan beberapa contoh string
    echo palindrome("civic");    // true
    echo palindrome("nababan");  // true
    echo palindrome("jambaban"); // false
    echo palindrome("racecar");  // true
    /*
Soal No 3 
Palindrome 
Buatlah sebuah function yang menerima parameter berupa string yang mengecek apakah string tersebut sebuah palindrome atau bukan. Palindrome adalah sebuah kata atau kalimat yang jika dibalik akan memberikan kata yang sama contohnya: katak, civic. Jika string tersebut palindrome maka akan mengembalikan nilai true, sedangkan jika bukan palindrome akan mengembalikan false. NB: 
Contoh: 
palindrome("katak") => output : "true" 
palindrome("jambu") => output : "false" 
NB: DILARANG menggunakan built-in function PHP seperti strrev() dll. Gunakan looping seperti biasa atau gunakan function reverseString dari jawaban no.2! */
    // Code function di sini 
    // Hapus komentar di bawah ini untuk jalankan code 
    // palindrome("civic") ; // true 
    // palindrome("nababan") ; // true 
    // palindrome("jambaban"); // false 
    // palindrome("racecar"); // true 
    echo "<h3>Soal No 4 Tentukan Nilai </h3>";

    function tentukan_nilai($nilai)
    {
        if ($nilai >= 85 && $nilai <= 100) {
            return "Sangat Baik<br>";
        } elseif ($nilai >= 70 && $nilai < 85) {
            return "Baik<br>";
        } elseif ($nilai >= 60 && $nilai < 70) {
            return "Cukup<br>";
        } else {
            return "Kurang<br>";
        }
    }

    // Memanggil fungsi tentukan_nilai dengan beberapa contoh nilai
    echo tentukan_nilai(98); // Output: Sangat Baik
    echo tentukan_nilai(76); // Output: Baik
    echo tentukan_nilai(67); // Output: Cukup
    echo tentukan_nilai(43); // Output: Kurang
    /*
Soal 4 
buatlah sebuah function bernama tentukan_nilai . Di dalam function tentukan_nilai yang menerima parameter 
berupa integer. dengan ketentuan jika paramater integer lebih besar dari sama dengan 85 dan lebih kecil sama dengan 100 maka akan mereturn String “Sangat Baik” Selain itu jika parameter integer lebih besar sama dengan 70 dan lebih kecil dari 85 maka akan mereturn string “Baik” selain itu jika parameter number lebih besar samadengan 60 dan lebih kecil dari 70 maka akan mereturn string “Cukup” selain itu maka akan mereturn string “Kurang” 
*/
    // Code function di sini 
    // Hapus komentar di bawah ini untuk jalankan code 
    // echo tentukan_nilai(98); //Sangat Baik 
    // echo tentukan_nilai(76); //Baik 
    // echo tentukan_nilai(67); //Cukup 
    // echo tentukan_nilai(43); //Kurang 
    ?>
</body>

</html>