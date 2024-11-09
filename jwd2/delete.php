<?php
// File json yang akan dibaca
$file = "mahasiswa.json";

// Mendapatkan file json
$mahasiswa = file_get_contents($file);

// Mendecode mahasiswa.json
$data = json_decode($mahasiswa, true);

// Membaca data array menggunakan foreach
foreach ($data as $key => $d) {
    // Hapus data kedua
    if ($d['no'] == 3) {
        // Menghapus data array sesuai dengan index
        // Menggantinya dengan elemen baru
        array_splice($data, $key, 2);
    }
}

// Mengencode data menjadi json
$jsonfile = json_encode($data, JSON_PRETTY_PRINT);

// Menyimpan data ke dalam mahasiswa.json
$mahasiswa = file_put_contents($file, $jsonfile);