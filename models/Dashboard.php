<?php
require_once __DIR__ . '/../core/db.php';

class Dashboard {
    public static function totalBuku() {
        global $conn;
        return $conn->query("SELECT COUNT(*) AS total FROM buku")->fetch_assoc()['total'];
    }

    public static function totalMember() {
        global $conn;
        return $conn->query("SELECT COUNT(*) AS total FROM member")->fetch_assoc()['total'];
    }

    public static function totalTransaksi() {
        global $conn;
        return $conn->query("SELECT COUNT(*) AS total FROM transaksi")->fetch_assoc()['total'];
    }
}
