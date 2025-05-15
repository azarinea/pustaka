<?php
require_once '../models/Buku.php';

$action = $_GET['action'] ?? 'list';

if ($action == 'store' && isset($_POST['submit'])) {
    Buku::store($_POST['title'], $_POST['author'], $_POST['isbn'], $_POST['quantity']);
    header('Location: ../views/buku/list.php');
    exit;
}

if ($action == 'delete' && isset($_GET['id'])) {
    Buku::destroy($_GET['id']);
    header('Location: ../views/buku/list.php');
    exit;
}

if ($action == 'update' && isset($_POST['submit'])) {
    Buku::update($_POST['id'], $_POST['title'], $_POST['author'], $_POST['isbn'], $_POST['quantity']);
    header('Location: ../views/buku/list.php');
    exit;
}
?>
