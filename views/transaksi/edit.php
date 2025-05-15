<?php
require_once '../../models/Transaksi.php';
$data = Transaksi::getById($_GET['id']);
?>

<h2>Edit Transaksi</h2>
<form method="post" action="../../controllers/TransaksiController.php?action=update">
    <input type="hidden" name="id" value="<?= $data['transaction_id'] ?>">
    Tanggal Pinjam: <input type="date" name="borrow_date" value="<?= $data['borrow_date'] ?>"><br>
    Tanggal Kembali: <input type="date" name="due_date" value="<?= $data['due_date'] ?>"><br>
    Tanggal Dikembalikan: <input type="date" name="return_date" value="<?= $data['return_date'] ?>"><br>
    <button type="submit" name="submit">Update</button>
</form>
