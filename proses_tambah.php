<?php
include 'koneksi.php';

$pertanyaan = $_POST['pertanyaan'];
$opsi_a = $_POST['opsi_a'];
$opsi_b = $_POST['opsi_b'];
$opsi_c = $_POST['opsi_c'];
$opsi_d = $_POST['opsi_d'];
$opsi_e = $_POST['opsi_e'];
$jawaban = $_POST['jawaban'];

$sql = "INSERT INTO soal (pertanyaan, opsi_a, opsi_b, opsi_c, opsi_d, opsi_e, jawaban) 
        VALUES ('$pertanyaan', '$opsi_a', '$opsi_b', '$opsi_c', '$opsi_d', '$opsi_e', '$jawaban')";

if (mysqli_query($conn, $sql)) {
    echo "Soal berhasil ditambahkan.";
    header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
