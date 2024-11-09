<?php
// Tangkap variabel dari form
$npm = $_POST["npm"];
$nama = $_POST["nama"];
$jk = $_POST["jk"];
$jurusan = $_POST["jurusan"];
$vta = $_POST["ttugas"];
$vtb = $_POST["tuts"];
$vtc = $_POST["tuas"];
$vtd = ($vta * 0.2) + ($vtb * 0.3) + ($vtc * 0.5);

//Tampilkan datanya
echo " NPM       : $npm <br>";
echo " Nama       : $nama <br>";
echo " Jenis Kelamin       : $jk <br>";
echo " Jurusan       : $jurusan <br>";
echo " Nilai Tugas       : $vta <br>";
echo "Nilai UTS       : $vtb <br>";
echo "Nilai UAS     : $vtc <br>";
echo "Total NILAI      : $vtd <br>";

if ($vtd >= 90)
    echo "Anda Lulus Dan Mendapatkan Nilai A";
elseif ($vtd >= 80)
    echo "Anda Lulus Dan Mendapatkan Nilai B";
elseif ($vtd >= 60)
    echo "Anda Lulus Dan Mendapatkan Nilai C";
else
    echo "Anda Tidak Lulus Dan Mendapatkan Nilai D";
echo "<br>";

// File json yang akan dibaca
$file = "krs.json";

// Mendapatkan file json
$mahasiswa = file_get_contents($file);

// Mendecode anggota.json
$data = json_decode($mahasiswa, true);

// Data array baru
$data[] = array(
    'npm' => $npm,
    'nama' => $nama,
    'jeniskelamin' => $jk,
    'jurusan' => $jurusan,
    'tugas' => $vta,
    'uts' => $vtb,
    'uas' => $vtc,
    'nilai' => $vtd
);

$konten = json_encode($data, JSON_PRETTY_PRINT);

//menyimpan konten di file
file_put_contents($file, $konten);

//menampilkan data
foreach ($data as $key => $value) {
    echo "<br>";
    echo "<hr>";
    echo "NPM :" . $value['npm'] . '<br>';
    echo "Nama :" . $value['nama'] . '<br>';
    echo "JenisKelamin :" . $value['jeniskelamin'] . '<br>';
    echo "Jurusan :" . $value['jurusan'] . '<br>';
    echo "Tugas :" . $value['tugas'] . '<br>';
    echo "UTS :" . $value['uts'] . '<br>';
    echo "UAS :" . $value['uas'] . '<br>';
    echo "Nilai :" . $value['nilai'] . '<br>';
    echo "<hr>";
}
?>