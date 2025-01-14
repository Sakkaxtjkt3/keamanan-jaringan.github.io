<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Soal</title>
</head>
<body>
    <h1>Tambah Soal</h1>
    <form action="proses_tambah.php" method="POST">
        <label for="pertanyaan">Pertanyaan:</label><br>
        <textarea name="pertanyaan" id="pertanyaan" rows="5" required></textarea><br><br>
        
        <label for="opsi_a">Opsi A:</label>
        <input type="text" name="opsi_a" id="opsi_a" required><br>
        
        <label for="opsi_b">Opsi B:</label>
        <input type="text" name="opsi_b" id="opsi_b" required><br>
        
        <label for="opsi_c">Opsi C:</label>
        <input type="text" name="opsi_c" id="opsi_c" required><br>
        
        <label for="opsi_d">Opsi D:</label>
        <input type="text" name="opsi_d" id="opsi_d" required><br>
        
        <label for="opsi_e">Opsi E:</label>
        <input type="text" name="opsi_e" id="opsi_e" required><br>
        
        <label for="jawaban">Jawaban Benar:</label>
        <select name="jawaban" id="jawaban" required>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="E">E</option>

        </select><br><br>
        
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
