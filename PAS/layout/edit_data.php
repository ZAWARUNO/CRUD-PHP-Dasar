<?php
$messege = "";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM siswa_guru WHERE id='$id'";
    $result = mysqli_query($db, $query);
    $data = mysqli_fetch_assoc($result);
} else {
    echo "ID tidak ditemukan";
    exit;
}
if (isset($_POST["edit"])) {
    $nama = $_POST['nama'];
    $nisn_nip = $_POST['nisn_nip'];
    $kelas = $_POST['kelas'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $jurusan = $_POST['jurusan'];
    $sebagai = $_POST['sebagai'];

    $query = "UPDATE siswa_guru SET nama='$nama', nisn_nip='$nisn_nip', kelas='$kelas',jenis_kelamin='$jenis_kelamin', jurusan='$jurusan', sebagai='$sebagai'  WHERE id=$id";
    if (mysqli_query($db, $query)) {
        echo "Data Berhasil diperbarui!";
        header("location: ?page=layout/lihat_data");
        exit;
    } else {
        echo "Gagal memperbarui data!";
    }
}
?>

<h1 class="text-2xl text-center font-bold my-3 mt-32">
    Edit Data Siswa/Guru
</h1>

<div class="flex justify-center">
    <form action="" method="POST" class="bg-gray-300 p-5 px-16 w-3/4 rounded-lg text-lg font-medium">
        <div>
            <label for="nama" class="block mt-3">Nama</label>
            <input type="text" class="block w-full p-2 shadow-md" name="nama" placeholder="Masukan Nama" value="<?= $data["nama"] ?>">
            <label for="nisn" class="block mt-3">Nisn</label>
            <input type="text" class="block w-full p-2 shadow-md" name="nisn_nip" placeholder="Masukan Nisn" value="<?= $data["nisn_nip"] ?>">
            <label for="kelas" class="block mt-3">Kelas</label>
            <input type="text" class="block w-full p-2 shadow-md" name="kelas" placeholder="Masukan kelas" value="<?= $data["kelas"] ?>">
            <label for="jenis_kelamin" class="block mt-3">Jenis kelamin</label>
            <select name="jenis_kelamin" class="block mt-3 w-full p-2 shadow-md" id="jenis_kelamin">
                <option value="" disabled>Pilih kelamin</option>
                <option value="pria" <?php if ($data['jenis_kelamin'] == 'pria')  echo "selected" ?>>Laki-laki</option>
                <option value="perempuan" <?php if ($data['jenis_kelamin'] == 'perempuan')  echo "selected" ?>>Perempuan</option>
            </select>
            <label for="jurusan" class="block mt-3">Jurusan</label>
            <input type="text" class="block w-full p-2 shadow-md" name="jurusan" placeholder="Masukan jurusan" value="<?= $data["jurusan"] ?>">
            <label for="sebagai" class="block mt-3">Sebagai</label>
            <select name="sebagai" class="block w-full p-2 shadow-md" id="sebagai">
                <option value="" disabled >Pilih Peran</option>
                <option value="guru" <?php if ($data['sebagai'] == 'guru')  echo "selected" ?>>Guru</option>
                <option value="siswa" <?php if ($data['sebagai'] == 'siswa')  echo "selected" ?>>Siswa</option>
            </select>
            <div class="flex justify-center">
                <button type="submit" class="block bg-blue-600 rounded-lg px-5 text-white mt-3 p-2 shadow-md" name="edit">Tambah Data</button>
            </div>
        </div>
    </form>
</div>
<script>
    // alert("<?= $messege ?>")
</script>