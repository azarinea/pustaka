<?php
require_once __DIR__ . '/../core/db.php';

class Buku {
    public static function getAll() {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM buku ORDER BY book_id ASC");
        $stmt->execute();
        return $stmt->get_result();
    }

    public static function getById($id) {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM buku WHERE book_id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public static function store($title, $author, $isbn, $quantity) {
        global $conn;
        $stmt = $conn->prepare("CALL add_buku(?, ?, ?, ?)");
        $stmt->bind_param("sssi", $title, $author, $isbn, $quantity);
        return $stmt->execute();
    }

    public static function update($id, $title, $author, $isbn, $quantity) {
        global $conn;
        $stmt = $conn->prepare("UPDATE buku SET title = ?, author = ?, isbn = ?, quantity = ? WHERE book_id = ?");
        $stmt->bind_param("sssii", $title, $author, $isbn, $quantity, $id);
        return $stmt->execute();
    }

    public static function destroy($id) {
        global $conn;
        $stmt = $conn->prepare("DELETE FROM buku WHERE book_id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>
