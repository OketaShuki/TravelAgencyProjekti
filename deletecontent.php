<?php
session_start();
include 'DatabaseConnection.php';

$db = new DatabaseConnection();
$conn = $db->startConnection();

if (isset($_GET['id'])) {
    $contentId = $_GET['id'];

    if (!isset($_SESSION['user_id'])) {
        die("Error: You must be logged in to delete content.");
    }

    $deleted_by = $_SESSION['user_id'];

    $sql = "DELETE FROM content WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $contentId, PDO::PARAM_INT);

    if ($stmt->execute()) {
        echo "<script>alert('Contenti u fshi me sukses'); window.location.href = 'dashboardcontent.php';</script>";
    } else {
        echo "<script>alert('Error contenti nuk u fshi'); window.location.href = 'dashboardcontent.php';</script>";
    }
} else {
    echo "<script>alert('Invalid request.'); window.location.href = 'dashboardcontent.php';</script>";
}
?>
