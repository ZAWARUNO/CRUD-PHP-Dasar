<?php 
if (isset($_POST['submit'])) {
  $koneksi->query("INSERT INTO siswa (nama_siswa,nisn,kelamin,kelas) VALUES ('$_POST[nama_siswa]','$_POST[nisn]','$_POST[kelamin]','$_POST[kelas]')");
}
?>
    <h1 class="text-xl font-medium flex justify-center my-2">Form Tambah Data Siswa</h1>
    <main class="flex justify-center w-full">
        <div class="w-1/2 bg-white p-3 rounded-md text-lg font-medium">
          <form action="" method="post">
            <label for="nama" class="block">Nama Siswa</label>
            <input type="text" name="nama_siswa" class="border p-3 rounded-sm shadow-sm w-full" placeholder="Masukan nama siswa">
            <label for="nisn" class="block">NISN</label>
            <input type="text" name="nisn" class="border p-3 rounded-sm shadow-sm w-full" placeholder="Masukan NISN siswa">
            <label for="kelamin" class="block">Jenis Kelamin</label>
            <select name="kelamin" id="kelamin" class="border p-3 rounded-sm shadow-sm w-full">
                <option value="" selected disabled>Pilih Jenis Kelamin</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            <label for="kelas" class="block">Kelas</label>
            <input type="text" name="kelas" class="border p-3 rounded-sm shadow-sm w-full" placeholder="Masukan Kelas siswa">
            <button class="bg-green-500 text-white w-full h-11 mt-4" type="submit" name="submit">Submit</button>
            </form>
        </div>
    </main>