<?php
include 'koneksi.php';

if(isset($_POST['simpan'])){

    $mapel = $_POST['mata_pelajaran'];
    $deskripsi = $_POST['deskripsi'];
    $deadline = $_POST['deadline'];
    $status = $_POST['status'];

    mysqli_query($conn,"
        INSERT INTO tugas
        (mata_pelajaran, deskripsi, deadline, status)
        VALUES
        ('$mapel','$deskripsi','$deadline','$status')
    ");

    header("Location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Tugas</title>
</head>
<body>

<h2>Tambah Tugas</h2>

<form method="POST">
    Mata Pelajaran <br>
    <input type="text" name="mata_pelajaran" required><br><br>

    Deskripsi <br>
    <textarea name="deskripsi" required></textarea><br><br>

    Deadline <br>
    <input type="date" name="deadline" required><br><br>

    Status <br>
    <select name="status">
        <option>Belum Selesai</option>
        <option>Selesai</option>
    </select><br><br>

    <button type="submit" name="simpan">Simpan</button>
</form>

</body>
</html>