<?php
require_once '../models/Transaksi.php';

$action = $_GET['action'] ?? 'list';

if ($action == 'store' && isset($_POST['submit'])) {
    Transaksi::store($_POST['book_id'], $_POST['member_id'], $_POST['borrow_date'], $_POST['due_date']);
    header('Location: ../views/transaksi/list.php');
    exit;
}

if ($action == 'update' && isset($_POST['submit'])) {
    Transaksi::update($_POST['id'], $_POST['borrow_date'], $_POST['due_date'], $_POST['return_date']);
    header('Location: ../views/transaksi/list.php');
    exit;
}

if ($action == 'delete' && isset($_GET['id'])) {
    Transaksi::destroy($_GET['id']);
    header('Location: ../views/transaksi/list.php');
    exit;
}
?>
