<?php
$koneksi = mysqli_connect("localhost", "root", "", "test_siswa");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-green-100">
  <header class="bg-green-500 text-white text-center p-3 ">
    <div class="text-2xl font-bold">Sistem Data Siswa</div>
    <div class="py-2 space-x-4">
      <a href="?page=home">Home</a>
      <a href="?page=tambah_siswa">Tambah Data</a>
      <a href="?page=siswa">lihat Data</a>
    </div>
  </header>
  <?php
  $page = isset($_GET['page']) ? $_GET['page'] : 'home';
      include $page . '.php';
  ?>
  <footer class="fixed bottom-0 text-center text-white left-0 right-0 bg-green-500 p-3">@copyright by Apri</footer>

</body>

</html>