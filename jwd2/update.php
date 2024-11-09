<?php
// File json yang akan dibaca
$file = "mahasiswa.json";

// Mendapatkan file json
$mahasiswa = file_get_contents($file);

// Mendecode mahasiswa.json
$data = json_decode($mahasiswa, true);

// Membaca data array menggunakan foreach
foreach ($data as $key => $d) {
    // Perbarui data kedua
    if ($d['no'] === 1) {
        $data[$key]['alamat'] = 'Jakarta';
    }
}

// Mengencode data menjadi json
$jsonfile = json_encode($data, JSON_PRETTY_PRINT);

// Menyimpan data ke dalam mahasiswa.json
$mahasiswa = file_put_contents($file, $jsonfile);