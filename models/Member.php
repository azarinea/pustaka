<?php
require_once __DIR__ . '/../core/db.php';

class Member {
    public static function getAll() {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM member ORDER BY member_id ASC");
        $stmt->execute();
        return $stmt->get_result();
    }

    public static function getById($id) {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM member WHERE member_id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public static function store($name, $email, $phone, $address) {
        global $conn;
        $stmt = $conn->prepare("CALL add_member(?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $phone, $address);
        return $stmt->execute();
    }

    public static function update($id, $name, $email, $phone, $address) {
        global $conn;
        $stmt = $conn->prepare("UPDATE member SET name=?, email=?, phone=?, address=? WHERE member_id=?");
        $stmt->bind_param("ssssi", $name, $email, $phone, $address, $id);
        return $stmt->execute();
    }

    public static function destroy($id) {
        global $conn;
        $stmt = $conn->prepare("DELETE FROM member WHERE member_id=?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>
