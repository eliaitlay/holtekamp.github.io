<?php
include 'koneksi.php'; // Memasukkan file koneksi

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $status = $_POST['status'];
    $gambar = $_POST['gambar']; // Pastikan gambar sudah valid

    $sql = "INSERT INTO informasi (title, content, status, gambar) VALUES ('$title', '$content', '$status', '$gambar')";

    if ($conn->query($sql) === TRUE) {
        echo "Informasi berhasil ditambahkan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<form action="tambah_informasi.php" method="post">
    <label for="title">Judul:</label>
    <input type="text" id="title" name="title" required><br>

    <label for="content">Isi:</label>
    <textarea id="content" name="content" required></textarea><br>

    <label for="status">Status:</label>
    <select id="status" name="status">
        <option value="Aktif">Aktif</option>
        <option value="Nonaktif">Nonaktif</option>
    </select><br>

    <label for="gambar">Gambar:</label>
    <input type="text" id="gambar" name="gambar"><br>

    <input type="submit" value="Simpan">
</form>
