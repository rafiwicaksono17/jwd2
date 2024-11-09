<form action="jwdjson.php" method="post">
    Program Menghitung Nilai Mata Kuliah<br>
    NPM : <input type="text" name="npm" /><br />
    Nama : <input type="text" name="nama" /><br />
    Jenis Kelamin : 
    <input type="radio" name="jk" value="l" required/> Laki-Laki
    <input type="radio" name="jk" value="p"/> Perempuan <br />
    Jurusan : 
    <select name="jurusan" required>
        <option value="">Pilih Jurusan</option>
        <option value="Teknik Informatika">Teknik Informatika</option>
        <option value="Teknik Industri">Teknik Industri</option>
    </select><br/>
    Masukan Input Tugas : <input type="text" name="ttugas" /><br />
    Masukan Input UTS : <input type="text" name="tuts" /><br />
    Masukan Input UAS : <input type="text" name="tuas" /><br />
    <input type="submit" value="OK" name="bok" />
    <input type="reset" value="Batal" />
</form>