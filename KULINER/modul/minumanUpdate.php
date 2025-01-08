<?php
require "includes/config.php";

// Ambil ID dari query string
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Buat query untuk mengambil data dari database
$query = "SELECT * FROM tbl_minuman WHERE id_minuman = $id";
$sql = mysqli_query($conn, $query);

// Ambil data hasil query
$data = mysqli_fetch_assoc($sql);

// Jika data yang di-edit tidak ditemukan
if (!$data) {
    die("Data tidak ditemukan...");
}
?>

<table>
    <tr>
        <th colspan="3"><u>Update Data Daftar Minuman</u></th>
    </tr>
    <form method="post" action="?page=minumanUpdateProses">
        <!-- Menampung nilai ID yang akan diedit -->
        <input type="hidden" name="id" value="<?= $data['id_minuman'] ?>" />
        <tr>
            <td style="width: 8em;">Nama Minuman</td>
            <td>:</td>
            <td>
                <input type="text" name="nama_minuman" style="width: 20em;" value="<?= htmlspecialchars($data['nama_minuman']) ?>">
            </td>
        </tr>
        <tr>
            <td style="width: 8em;">Daerah Minuman</td>
            <td>:</td>
            <td>
                <input type="text" name="daerah_minuman" style="width: 20em;" value="<?= htmlspecialchars($data['daerah_minuman']) ?>">
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td style="padding: 0.5em;">
                <input type="submit" name="update" value="Update">
                <input type="button" value="Cancel" onClick="document.location='?page=minuman'">
            </td>
        </tr>
    </form>
</table>
