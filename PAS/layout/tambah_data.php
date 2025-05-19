<?php
$messege = "";
if (isset($_POST["tambah"])) {
        $nama = $_POST["nama"];
        $nisn_nip = $_POST["nisn_nip"];
        $kelas = $_POST["kelas"];
        $jenis_kelamin = $_POST["jenis_kelamin"];
        $jurusan = $_POST["jurusan"];
        $sebagai = $_POST["sebagai"];
        $sql = "INSERT INTO siswa_guru (nama, nisn_nip, kelas, jenis_kelamin, jurusan, sebagai) VALUES ('$nama', '$nisn_nip', '$kelas', '$jenis_kelamin', '$jurusan', '$sebagai')";
        $db->query($sql);
        header("location: ?page=layout/lihat_data");
        $messege = "Data berhasil ditambah";
} else {
        $messege = "Data gagal Ditambah";
}
?>

<h1 class="text-2xl text-center font-bold my-3 mt-32">
        Tambah Data Siswa/Guru
</h1>

<div class="flex justify-center">
        <form action="" method="POST" class="bg-gray-300 p-5 px-16 w-3/4 rounded-lg text-lg font-medium">
                <div>
                        <label for="nama" class="block mt-3">Nama</label>
                        <input type="text" class="block w-full p-2 shadow-md" name="nama" placeholder="Masukan Nama">
                        <label for="nisn" class="block mt-3">Nisn</label>
                        <input type="text" class="block w-full p-2 shadow-md" name="nisn_nip" placeholder="Masukan Nisn">
                        <label for="kelas" class="block mt-3">Kelas</label>
                        <input type="text" class="block w-full p-2 shadow-md" name="kelas" placeholder="Masukan kelas">
                        <label for="jenis_kelamin" class="block mt-3">Jenis kelamin</label>
                        <select name="jenis_kelamin" class="block mt-3 w-full p-2 shadow-md" id="jenis_kelamin">
                                <option value="" disabled selected>Pilih kelamin</option>
                                <option value="pria">Laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                        </select>
                        <label for="jurusan" class="block mt-3">Jurusan</label>
                        <input type="text" class="block w-full p-2 shadow-md" name="jurusan" placeholder="Masukan jurusan">
                        <label for="sebagai" class="block mt-3">Sebagai</label>
                        <select name="sebagai" class="block w-full p-2 shadow-md" id="sebagai">
                                <option value="" disabled selected>Pilih Peran</option>
                                <option value="guru">Guru</option>
                                <option value="siswa">Siswa</option>
                        </select>
                        <div class="flex justify-center">
                                <button type="submit" class="block bg-blue-600 rounded-lg px-5 text-white mt-3 p-2 shadow-md" name="tambah">Tambah Data</button>
                        </div>
                </div>
        </form>
</div>
<script>
        alert("<?= $messege ?>")
</script>