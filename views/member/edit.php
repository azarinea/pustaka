<?php
require_once '../../models/Member.php';
$data = Member::getById($_GET['id']);
?>

<h2>Edit Member</h2>
<form method="post" action="../../controllers/MemberController.php?action=update">
    <input type="hidden" name="id" value="<?= $data['member_id'] ?>">
    Nama: <input type="text" name="name" value="<?= $data['name'] ?>"><br>
    Email: <input type="email" name="email" value="<?= $data['email'] ?>"><br>
    Telepon: <input type="text" name="phone" value="<?= $data['phone'] ?>"><br>
    Alamat: <textarea name="address"><?= $data['address'] ?></textarea><br>
    <button type="submit" name="submit">Update</button>
</form>
