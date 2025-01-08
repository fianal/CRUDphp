<?php
// Cek apakah tombol submit sudah diklik
if (isset($_POST['submit'])) {
    // Mengambil dan memproses input
    $input_nama_minuman = inputData($_POST['nama_minuman']);
    $input_daerah_minuman = inputData($_POST['daerah_minuman']);

    // Melindungi input dari SQL Injection
    $nama_minuman = mysqli_real_escape_string($conn, $input_nama_minuman);
    $daerah_minuman = mysqli_real_escape_string($conn, $input_daerah_minuman);

    // Validasi field nama minuman
    if (empty($nama_minuman)) {
        echo "<script>alert('Nama minuman wajib diisi!');window.location='?page=minumanAdd';</script>";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $nama_minuman)) {
        echo "<script>alert('Nama minuman hanya boleh mengandung huruf dan spasi!');window.location='?page=minumanAdd';</script>";
    } elseif (empty($daerah_minuman)) {
        echo "<script>alert('Daerah minuman wajib diisi!');window.location='?page=minumanAdd';</script>";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $daerah_minuman)) {
        echo "<script>alert('Daerah minuman hanya boleh mengandung huruf dan spasi!');window.location='?page=minumanAdd';</script>";
    } else {
        // Validasi duplikasi data
        $cek = mysqli_num_rows(mysqli_query($conn, "SELECT nama_minuman FROM tbl_minuman WHERE nama_minuman='$nama_minuman'"));

        if ($cek > 0) {
            echo "<script>alert('Data sudah tersedia!');window.location='?page=minumanAdd';</script>";
        } else {
            // Membuat query untuk menambah data
            $query = "INSERT INTO tbl_minuman (nama_minuman, daerah_minuman) VALUES ('$nama_minuman', '$daerah_minuman')";
            $sql = mysqli_query($conn, $query);

            // Cek apakah proses simpan berhasil
            if ($sql) {
                echo "<script>alert('Data berhasil ditambah!');window.location='?page=minuman';</script>";
            } else {
                echo "<script>alert('Gagal menambah data!');window.location='?page=minuman';</script>";
            }
        }
    }
}
?>
