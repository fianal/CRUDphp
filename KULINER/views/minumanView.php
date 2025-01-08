<h2 class="text-center my-4">Data Minuman</h2>

<!-- Tambah Data Baru Button -->
<div class="text-center mb-4">
    <a href="?page=minumanAdd" class="btn btn-success">[+] Tambah Data Baru</a>
</div>

<!-- Tabel Data Minuman -->
<div class="container">
    <table class="table table-bordered table-striped table-hover text-center">
        <thead class="table-light">
            <tr>
                <th>No</th>
                <th>Nama Minuman</th>
                <th>Daerah Minuman</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "includes/config.php";
            $query = "SELECT * FROM tbl_minuman ORDER BY id_minuman ASC";
            $sql = mysqli_query($conn, $query);
            $nomor = 1;

            while ($data = mysqli_fetch_array($sql)) { ?>
                <tr>
                    <td class="text-info"><?= $nomor++; ?></td>
                    <td class="text-info"><?= htmlspecialchars($data["nama_minuman"]); ?></td> <!-- Warna biru pada nama minuman -->
                    <td class="text-info"><?= htmlspecialchars($data["daerah_minuman"]); ?></td> <!-- Warna hijau pada daerah minuman -->
                    <td>
                        <a href="?page=minumanUpdate&id=<?= $data['id_minuman']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="?page=minumanDelete&id=<?= $data['id_minuman']; ?>" 
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
