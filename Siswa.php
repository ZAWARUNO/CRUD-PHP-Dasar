<main class="flex justify-center w-full mt-25">
    <div class="w-1/2 bg-slate-50 p-5 rounded-md">
        <table class="min-w-full text-xl">
            <thead class="border-b">
                <tr>
                    <td>Nama Siswa</td>
                    <td>NISN</td>
                    <td>Kelamin</td>
                    <td>Kelas</td>
                    <td>Aksi</td>
                </tr>
            </thead>
            <tbody class="border-b mt-3 divide-y divide-gray-100">
                <?php
                $ambil = $koneksi->query("SELECT * FROM siswa");
                while ($pecah = $ambil->fetch_assoc()) {
                ?>

                    <tr>
                        <td><?php echo $pecah['nama_siswa']; ?></td>
                        <td><?php echo $pecah['nisn']; ?></td>
                        <td><?php echo $pecah['kelamin']; ?></td>
                        <td><?php echo $pecah['kelas']; ?></td>
                        <td class="flex space-x-2">
                            <button class="bg-green-500 px-3 py-2 rounded-md text-white" onclick="window.location.href='?page=edit_siswa&id=<?php echo $pecah['id_siswa']; ?>'" type="submit">Edit</button>
                            <button class="bg-red-500 px-3 py-2 rounded-md text-white" onclick="window.location.href='hapus_siswa.php?id=<?php echo $pecah['id_siswa']; ?>'" type="submit">Hapus</button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</main>