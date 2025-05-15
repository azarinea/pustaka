<?php
require_once '../models/Member.php';

$action = $_GET['action'] ?? 'list';

if ($action == 'store' && isset($_POST['submit'])) {
    Member::store($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['address']);
    header('Location: ../views/member/list.php');
    exit;
}

if ($action == 'update' && isset($_POST['submit'])) {
    Member::update($_POST['id'], $_POST['name'], $_POST['email'], $_POST['phone'], $_POST['address']);
    header('Location: ../views/member/list.php');
    exit;
}

if ($action == 'delete' && isset($_GET['id'])) {
    Member::destroy($_GET['id']);
    header('Location: ../views/member/list.php');
    exit;
}
?>
