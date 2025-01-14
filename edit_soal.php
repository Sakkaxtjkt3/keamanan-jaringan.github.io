<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM soal WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
} else {
    die("ID soal tidak ditemukan.");
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Soal</title>
</head>
<body>
    <h1>Edit Soal</h1>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <label for="pertanyaan">Pertanyaan:</label><br>
        <textarea name="pertanyaan" id="pertanyaan" rows="5" required><?php echo $row['pertanyaan']; ?></textarea><br><br>
        
        <label for="opsi_a">Opsi A:</label>
        <input type="text" name="opsi_a" id="opsi_a" value="<?php echo $row['opsi_a']; ?>" required><br>
        
        <label for="opsi_b">Opsi B:</label>
        <input type="text" name="opsi_b" id="opsi_b" value="<?php echo $row['opsi_b']; ?>" required><br>
        
        <label for="opsi_c">Opsi C:</label>
        <input type="text" name="opsi_c" id="opsi_c" value="<?php echo $row['opsi_c']; ?>" required><br>
        
        <label for="opsi_d">Opsi D:</label>
        <input type="text" name="opsi_d" id="opsi_d" value="<?php echo $row['opsi_d']; ?>" required><br>

        <label for="opsi_e">Opsi E:</label>
        <input type="text" name="opsi_e" id="opsi_e" value="<?php echo $row['opsi_e']; ?>" required><br>
        
        <label for="jawaban">Jawaban Benar:</label>
        <select name="jawaban" id="jawaban" required>
            <option value="A" <?php echo ($row['jawaban'] == 'A') ? 'selected' : ''; ?>>A</option>
            <option value="B" <?php echo ($row['jawaban'] == 'B') ? 'selected' : ''; ?>>B</option>
            <option value="C" <?php echo ($row['jawaban'] == 'C') ? 'selected' : ''; ?>>C</option>
            <option value="D" <?php echo ($row['jawaban'] == 'D') ? 'selected' : ''; ?>>D</option>
            <option value="E" <?php echo ($row['jawaban'] == 'E') ? 'selected' : ''; ?>>E</option>
        </select><br><br>
        
        <button type="submit">Simpan Perubahan</button>
    </form>
</body>
</html>
