<?php
include_once 'DatabaseConnection.php';

class ContentRepository {
    private $conn;

    public function __construct() {
        $db = new DatabaseConnection();
        $this->conn = $db->startConnection();
    }

    public function getAllContent() {
        $sql = "SELECT * FROM content ORDER BY created_at DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function deleteContent($id) {
        $sql = "DELETE FROM content WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$id]);
    }
}
?>
