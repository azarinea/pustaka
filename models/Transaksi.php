<?php
require_once __DIR__ . '/../core/db.php';

class Transaksi {
    public static function getAll() {
        global $conn;
        $sql = "SELECT t.*, b.title, m.name 
                FROM transaksi t 
                JOIN buku b ON t.book_id = b.book_id 
                JOIN member m ON t.member_id = m.member_id 
                ORDER BY t.transaction_id DESC";
        return $conn->query($sql);
    }

    public static function getById($id) {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM transaksi WHERE transaction_id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public static function store($book_id, $member_id, $borrow_date, $due_date) {
        global $conn;
        $stmt = $conn->prepare("CALL add_transaksi(?, ?, ?, ?)");
        $stmt->bind_param("iiss", $book_id, $member_id, $borrow_date, $due_date);
        return $stmt->execute();
    }

    public static function update($id, $borrow, $due, $return) {
        global $conn;
        $stmt = $conn->prepare("UPDATE transaksi SET borrow_date=?, due_date=?, return_date=? WHERE transaction_id=?");
        $stmt->bind_param("sssi", $borrow, $due, $return, $id);
        return $stmt->execute();
    }

    public static function destroy($id) {
        global $conn;
        $stmt = $conn->prepare("DELETE FROM transaksi WHERE transaction_id=?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>
