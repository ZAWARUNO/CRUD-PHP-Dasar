<?php
include 'service/database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style/tailwind-all.css">
</head>
<body class="w-full h-full">
    <header class="bg-teal-300 fixed top-0 left-0 right-0 text-center py-2 font-bold">
        <h1 class="text-2xl my-5">WEBSITE DATA SEKOLAH</h1>
        <div class="">
        <a class="mr-5 hover:text-white" href="?page=layout/tambah_data">Tambah Data</a>
        <a class="ml-5 hover:text-white" href="?page=layout/lihat_data">Lihat_data</a>
        </div>
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