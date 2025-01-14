<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM soal WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        echo "Soal berhasil dihapus. <a href='index.php'>Kembali ke Daftar Soal</a>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    echo "ID soal tidak ditemukan.";
}
?>
