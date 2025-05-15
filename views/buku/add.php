<h2>Tambah Buku</h2>
<form method="post" action="../../controllers/BukuController.php?action=store">
    Judul: <input type="text" name="title"><br>
    Penulis: <input type="text" name="author"><br>
    ISBN: <input type="text" name="isbn"><br>
    Jumlah: <input type="number" name="quantity"><br>
    <button type="submit" name="submit">Simpan</button>
</form>
