<div>
    <h1 class="text-2xl text-center font-bold my-3 mt-32">
        Data Siswa/Guru
    </h1>
    <table class="table mx-auto border shadow-lg">
        <thead>
            <tr class="border-gray-300 border-t border-b">
                <th class="p-3 px-2">No.</th>
                <th class="p-3 px-8">nama</th>
                <th class="p-3 px-8">NISN/NIP</th>
                <th class="p-3 px-8">Kelas</th>
                <th class="p-3 px-8">Jenis Kelamin</th>
                <th class="p-3 px-8">Jurusan</th>
                <th class="p-3 px-8">Sebagai</th>
                <th>
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            $tb = "SELECT * FROM siswa_guru";
            $result = $db->query($tb);
            $i = 0;
            while ($data = $result->fetch_assoc()) {
                $i++;
            ?>
                <tr>
                    <td class="p-3"><?= $i ?></td>
                    <td class="p-3"><?= $data["nama"] ?></td>
                    <td class="p-3"><?= $data["nisn_nip"] ?></td>
                    <td class="p-3"><?= $data["kelas"] ?></td>
                    <td class="p-3"><?= $data["jenis_kelamin"] ?></td>
                    <td class="p-3"><?= $data["jurusan"] ?></td>
                    <td class="p-3"><?= $data["sebagai"] ?></td>
                    <td class="p-3 px-8">
                        <form action="" method="get">
                            <button type="button"  class="mr-4 bg-red-500 text-white font-semibold p-2 rounded-lg" onclick="window.location.href='?page=layout/hapus&id=<?php echo $data['id']; ?>'">Hapus</button>
                            <button type="button" class="mr-4 bg-green-500 text-white font-semibold p-2 rounded-lg" onclick="window.location.href='?page=layout/edit_data&id=<?php echo $data['id']; ?>'">Edit</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>