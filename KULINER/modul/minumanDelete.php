<?php
include "includes/config.php";

// Ambil id dari query string
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Cek apakah ID valid
if ($id > 0) {
    // Buat query hapus
    $query = "DELETE FROM tbl_minuman WHERE id_minuman = $id";
    $sql = mysqli_query($conn, $query);

    // Cek apakah query hapus berhasil
    if ($sql) {
        echo "<script>alert('Data berhasil dihapus!'); window.location='?page=minuman';</script>";
    } else {
        echo "<script>alert('Data gagal dihapus!'); window.location='?page=minuman';</script>";
    }
} else {
    echo "<script>alert('ID tidak valid!'); window.location='?page=minuman';</script>";
}
?>
