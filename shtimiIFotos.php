<?php
session_start(); 
include 'DatabaseConnection.php';

$db = new DatabaseConnection();
$conn = $db->startConnection(); 

if (!isset($_SESSION['user_id'])) {
    die("Error: You must be logged in to submit a review. Please log in again.");
} 

$created_by = $_SESSION['user_id']; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $selected_image = $_POST['image'];  
    $image_path = "fototprojekt/" . $selected_image;

    
    $stmt_check = $conn->prepare("SELECT id FROM users WHERE id = :id");
    $stmt_check->bindParam(':id', $created_by);
    $stmt_check->execute();

    if ($stmt_check->rowCount() == 0) {
        die("Error: User does not exist in the database.");
    }

    
    $sql = "INSERT INTO content (title, description, image_path, created_by) 
            VALUES (:title, :description, :image_path, :created_by)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':image_path', $image_path);
    $stmt->bindParam(':created_by', $created_by);

    if ($stmt->execute()) {
        header("Location: feedback.php"); 
        exit();
    } else {
        echo "Error: Could not insert data.";
    }
}
?>
