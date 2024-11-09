<?php
// Data 1
$data[] = array(
    'no' => 1,
    'nama' => 'Rido',
    'alamat' => 'Magelang'
);

// Data 2
$data[] = array(
    'no' => 2,
    'nama' => 'Galuh',
    'alamat' => 'Bekasi'
);

// Data 3
$data[] = array(
    'no' => 3,
    'nama' => 'Luis',
    'alamat' => 'Jakarta'
);


// Mengencode data menjadi json
$jsonfile = json_encode($data, JSON_PRETTY_PRINT);

// Menyimpan data ke dalam mahasiswa.json
file_put_contents('mahasiswa.json', $jsonfile);