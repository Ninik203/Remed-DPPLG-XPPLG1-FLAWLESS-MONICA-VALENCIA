<?php
include 'koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($conn,"SELECT * FROM tugas WHERE id='$id'");
$row = mysqli_fetch_assoc($data);

if(isset($_POST['update'])){

    $mapel = $_POST['mata_pelajaran'];
    $deskripsi = $_POST['deskripsi'];
    $deadline = $_POST['deadline'];
    $status = $_POST['status'];

    mysqli_query($conn,"
        UPDATE tugas
        SET
        mata_pelajaran='$mapel',
        deskripsi='$deskripsi',
        deadline='$deadline',
        status='$status'
        WHERE id='$id'
    ");

    header("Location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Tugas</title>
</head>
<body>

<h2>Edit Tugas</h2>

<form method="POST">
    Mata Pelajaran <br>
    <input type="text"
           name="mata_pelajaran"
           value="<?= $row['mata_pelajaran']; ?>" required><br><br>

    Deskripsi <br>
    <textarea name="deskripsi" required><?= $row['deskripsi']; ?></textarea><br><br>

    Deadline <br>
    <input type="date"
           name="deadline"
           value="<?= $row['deadline']; ?>" required><br><br>

    Status <br>
    <select name="status">
        <option <?= $row['status']=='Belum Selesai'?'selected':'' ?>>
            Belum Selesai
        </option>
        <option <?= $row['status']=='Selesai'?'selected':'' ?>>
            Selesai
        </option>
    </select><br><br>

    <button type="submit" name="update">Update</button>
</form>

</body>
</html>