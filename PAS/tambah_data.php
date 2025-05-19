<?php 
$nama = $_POST["nama"];
$nisn_nip = $_POST["nisn/nip"];
$kelas = $_POST["kelas"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$jurusan = $_POST["jurusan"];
$sebagai = $_POST["sebagai"];
$sql = "INSERT INTO ";
?>

<h1>
Tambah Data Siswa/Guru 
</h1>

<form action="" method="POST">
        <label for="nama">Nama</label>
        <input type="text" name="nama" placeholder="Masukan Nama">
        <label for="nisn">Nisn</label>
        <input type="text" name="nisn/nip" placeholder="Masukan Nisn">
        <label for="kelas">Kelas</label>
        <input type="text" name="kelas" placeholder="Masukan kelas">
        <label for="jenis_kelamin">Jenis kelamin</label>
        <input type="text" name="jenis_kelamin" placeholder="Masukan jenis kelamin">
        <label for="jurusan">Jurusan</label>
        <input type="text" name="jurusan" placeholder="Masukan jurusan">
        <label for="sebagai">Sebagai</label>
        <input type="text" name="sebagai" placeholder="Masukan sebagai">
        <div>
                <button type="submit" name="tambah">Tambah Data</button>
        </div>
</form>