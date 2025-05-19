<?php
include 'service/database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- <link rel="stylesheet" href="style/tailwind-all.css"> -->
</head>
<body>
    <header class="bg">
        <h1>WEBSITE DATA SEKOLAH</h1>
        <a href="?page=tambah_data">Tambah Data</a>
        <a href="?page=lihat_data">Lihat_data</a>
    </header>
    <main>
        <?php
        $page = isset($_GET['page']) ? $_GET['page'] : 'tambah_data' ;
        include $page . '.php' ;
        ?>
    </main>
    <footer>
        @copyright by M.Apriansyah
    </footer>
</body>
</html>