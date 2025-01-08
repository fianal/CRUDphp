<h2 class="text-center my-4">Data Makanan</h2>

<!-- Tambah Data Baru Button -->
<div class="text-center mb-4">
    <a href="?page=makananAdd" class="btn btn-success">[+] Tambah Data Baru</a>
</div>

<!-- Tabel Data Makanan -->
<div class="container">
    <table class="table table-bordered table-striped table-hover text-center">
        <thead class="table-light">
            <tr>
                <th>No</th>
                <th>Nama Makanan</th>
                <th>Daerah Makanan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "includes/config.php";
            $query = "SELECT * FROM tbl_makanan ORDER BY id_makanan ASC";
            $sql = mysqli_query($conn, $query);
            $nomor = 1;

            while ($data = mysqli_fetch_array($sql)) { ?>
                <tr>
                    <td class="text-info"><?= $nomor++; ?></td>
                    <td class="text-info"><?= htmlspecialchars($data["nama_makanan"]); ?></td> <!-- Warna biru pada nama makanan -->
                    <td class="text-info"><?= htmlspecialchars($data["daerah_makanan"]); ?></td> <!-- Warna hijau pada daerah makanan -->
                    <td>
                        <a href="?page=makananUpdate&id=<?= $data['id_makanan']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="?page=makananDelete&id=<?= $data['id_makanan']; ?>" 
                           onclick="return confirm('Yakin ingin menghapus data ini?');" 
                           class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <!-- Total Data -->
    <div class="text-center mt-3">
        <p>Total: <?= mysqli_num_rows($sql); ?></p>
    </div>
</div>
