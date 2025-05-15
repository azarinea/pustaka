<?php
require_once '../../models/Buku.php';
$data = Buku::getById($_GET['id']);
?>

<h2>Edit Buku</h2>
<form method="post" action="../../controllers/BukuController.php?action=update">
    <input type="hidden" name="id" value="<?= $data['book_id'] ?>">
    Judul: <input type="text" name="title" value="<?= $data['title'] ?>"><br>
    Penulis: <input type="text" name="author" value="<?= $data['author'] ?>"><br>
    ISBN: <input type="text" name="isbn" value="<?= $data['isbn'] ?>"><br>
    Jumlah: <input type="number" name="quantity" value="<?= $data['quantity'] ?>"><br>
    <button type="submit" name="submit">Update</button>
</form>
