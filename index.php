<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Soal</title>
</head>
<body>
    <h1>Daftar Soal</h1>
    <a href="tambah_soal.php">Tambah Soal</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Pertanyaan</th>
                <th>Opsi A</th>
                <th>Opsi B</th>
                <th>Opsi C</th>
                <th>Opsi D</th>
                <th>Opsi E</th>
                <th>Jawaban</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = mysqli_query($conn, "SELECT * FROM soal");
            $no = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$no}</td>
                        <td>{$row['pertanyaan']}</td>
                        <td>{$row['opsi_a']}</td>
                        <td>{$row['opsi_b']}</td>
                        <td>{$row['opsi_c']}</td>
                        <td>{$row['opsi_d']}</td>
                        <td>{$row['opsi_e']}</td>
                        <td>{$row['jawaban']}</td>
                        <td>
                            <a href='edit_soal.php?id={$row['id']}'>Edit</a> | 
                            <a href='hapus_soal.php?id={$row['id']}'>Hapus</a>
                        </td>
                      </tr>";
                $no++;
            }
            ?>
        </tbody>
    </table>
</body>
</html>
