<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manajemen Tugas Sekolah</title>
    <style>
        body{
            font-family: Arial;
            margin:40px;
            background:#f4f4f4;
        }
        table{
            width:100%;
            border-collapse:collapse;
            background:white;
        }
        th,td{
            border:1px solid #ddd;
            padding:10px;
            text-align:left;
        }
        th{
            background:#4CAF50;
            color:white;
        }
        .btn{
            padding:8px 12px;
            text-decoration:none;
            color:white;
            border-radius:5px;
        }
        .tambah{background:green;}
        .edit{background:orange;}
        .hapus{background:red;}
    </style>
</head>
<body>

<h2>Manajemen Tugas Sekolah</h2>

<a href="tambah.php" class="btn tambah">+ Tambah Tugas</a>

<br><br>

<table>
    <tr>
        <th>ID</th>
        <th>Mata Pelajaran</th>
        <th>Deskripsi</th>
        <th>Deadline</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>

<?php
$data = mysqli_query($conn, "SELECT * FROM tugas ORDER BY deadline ASC");

while($row = mysqli_fetch_assoc($data)){
?>
<tr>
    <td><?= $row['id']; ?></td>
    <td><?= $row['mata_pelajaran']; ?></td>
    <td><?= $row['deskripsi']; ?></td>
    <td><?= $row['deadline']; ?></td>
    <td><?= $row['status']; ?></td>
    <td>
        <a href="edit.php?id=<?= $row['id']; ?>" class="btn edit">Edit</a>
        <a href="hapus.php?id=<?= $row['id']; ?>"
           class="btn hapus"
           onclick="return confirm('Yakin hapus data?')">Hapus</a>
    </td>
</tr>
<?php } ?>

</table>

</body>
</html>