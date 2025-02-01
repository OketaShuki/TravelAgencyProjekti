<?php
session_start();
include 'DatabaseConnection.php';

$db = new DatabaseConnection();
$conn = $db->startConnection();

// Ensure a valid ID is passed
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("Error: Invalid content ID.");
}

$contentId = $_GET['id'];

// Fetch the current content details
$stmt = $conn->prepare("SELECT * FROM content WHERE id = :id");
$stmt->bindParam(':id', $contentId);
$stmt->execute();
$content = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$content) {
    die("Error: Content not found.");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Content</title>
    <link rel="stylesheet" href="editcontent.css">

</head>
<body>

<h2>Edit Content</h2>
<form method="POST" action="updateContent.php">
    <input type="hidden" name="id" value="<?= htmlspecialchars($content['id']) ?>">
    
    <label>Title:</label>
    <input type="text" name="title" value="<?= htmlspecialchars($content['title']) ?>" required><br>

    <label>Description:</label>
    <textarea name="description" required><?= htmlspecialchars($content['description']) ?></textarea><br>

    <label>Image Path:</label>
    <input type="text" name="image_path" value="<?= htmlspecialchars($content['image_path']) ?>" required><br>

    <button type="submit">Save Changes</button>
</form>

</body>
</html>
