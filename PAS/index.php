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
        <a href="?page=layout/tambah_data">Tambah Data</a>
        <a href="?page=layout/lihat_data">Lihat_data</a>
    </header>
    <main>
        <?php
        $page = isset($_GET['page']) ? $_GET['page'] : 'layout/tambah_data' ;
        include $page . '.php' ;
        ?>
    </main>
    <?php include 'layout/footer.html' ?>
</body>
</html>