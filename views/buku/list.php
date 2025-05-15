<?php
require_once '../../models/Buku.php';
$result = Buku::getAll();
?>

<h2>Daftar Buku</h2>
<a href="add.php">+ Tambah Buku</a>
<table border="1" cellpadding="8">
<tr>
    <th>No</th>
    <th>Judul</th>
    <th>Penulis</th>
    <th>ISBN</th>
    <th>Jumlah</th>
    <th>Aksi</th>
</tr>

<?php
$no = 1;
if ($result->num_rows > 0):
    while ($row = $result->fetch_assoc()):
?>
<tr>
    <td><?= $no++ ?></td>
    <td><?= htmlspecialchars($row['title']) ?></td>
    <td><?= htmlspecialchars($row['author']) ?></td>
    <td><?= htmlspecialchars($row['isbn']) ?></td>
    <td><?= htmlspecialchars($row['quantity']) ?></td>
    <td>
        <a href="edit.php?id=<?= $row['book_id'] ?>">Edit</a> |
        <a href="../../controllers/BukuController.php?action=delete&id=<?= $row['book_id'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
    </td>
</tr>
<?php endwhile; else: ?>
<tr><td colspan="6" align="center">Tidak ada data buku.</td></tr>
<?php endif; ?>
</table>
