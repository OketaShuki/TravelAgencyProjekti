<?php
session_start();
include 'DatabaseConnection.php';

$db = new DatabaseConnection();
$conn = $db->startConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $contentId = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $image_path = $_POST['image_path'];
    
    if (!isset($_SESSION['user_id'])) {
        die("Error: You must be logged in to modify content.");
    }

    $modified_by = $_SESSION['user_id']; 

    // Update query
    $sql = "UPDATE content 
            SET title = :title, description = :description, image_path = :image_path, 
                modified_by = :modified_by, updated_at = NOW() 
            WHERE id = :id";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':image_path', $image_path);
    $stmt->bindParam(':modified_by', $modified_by);
    $stmt->bindParam(':id', $contentId);

    if ($stmt->execute()) {
        header("Location: dashboardcontent.php"); 
        exit();
    } else {
        echo "Error updating content.";
    }
}
?>
