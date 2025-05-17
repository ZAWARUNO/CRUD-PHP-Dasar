<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM siswa WHERE id_siswa='$id'";
    $result = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_assoc($result);
} else {
    echo "ID tidak ditemukan";
    exit;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_siswa = $_POST['nama_siswa'];
    $nisn = $_POST['nisn'];
    $kelamin = $_POST['kelamin'];
    $kelas = $_POST['kelas'];
    
    $query = "UPDATE siswa SET nama_siswa='$nama_siswa', nisn='$nisn', kelamin='$kelamin', kelas='$kelas' WHERE id_siswa=$id";
    if (mysqli_query($koneksi, $query)) {
        echo "Data Berhasil diperbarui!";
        header("location: ?page=siswa");
        exit;
    } else {
        echo "Gagal memperbarui data!";
    }
}

?>
<h1 class="text-xl font-medium flex justify-center my-2">Form Tambah Data Siswa</h1>
<main class="flex justify-center w-full">
    <div class="w-1/2 bg-white p-3 rounded-md text-lg font-medium">
        <form action="" method="POST">
            <label for="nama" class="block">Nama Siswa</label>
            <input type="text" name="nama_siswa" class="border p-3 rounded-sm shadow-sm w-full" value="<?php echo $data['nama_siswa']; ?>" placeholder="Masukan nama siswa">
            <label for="nisn" class="block">NISN</label>
            <input type="text" name="nisn" class="border p-3 rounded-sm shadow-sm w-full" value="<?php echo $data['nisn']; ?>" placeholder="Masukan NISN siswa">
            <label for="kelamin" class="block">Jenis Kelamin</label>
            <select name="kelamin" id="kelamin" class="border p-3 rounded-sm shadow-sm w-full">
            <option <?php echo ($data['kelamin'] == 'Laki-Laki') ? 'selected' : ''; ?> value="Laki-Laki">Laki-Laki</option>
            <option <?php echo ($data['kelamin'] == 'Perempuan') ? 'selected' : ''; ?> value="Perempuan">Perempuan</option>
            </select>
            <label for="kelas" class="block">Kelas</label>
            <input type="text" name="kelas" value="<?php echo $data['kelas']; ?>" class="border p-3 rounded-sm shadow-sm w-full" placeholder="Masukan Kelas siswa">
            <button class="bg-green-500 text-white w-full h-11 mt-4" type="submit" name="submit">Submit</button>
        </form>
    </div>
</main>