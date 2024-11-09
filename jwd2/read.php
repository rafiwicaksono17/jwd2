<?php
// File json yang akan dibaca (full path file)
$file = "mahasiswa.json";

// Mendapatkan file json
$mahasiswa = file_get_contents($file);

// Mendecode mahasiswa.json
$data = json_decode($mahasiswa, true);

// Membaca data array menggunakan foreach
foreach ($data as $d) {
    echo "No: " . $d['no'] . "<br>";
    echo "Nama: " . $d['nama'] . "<br>";
    echo "Alamat: " . $d['alamat'] . "<br>";
}