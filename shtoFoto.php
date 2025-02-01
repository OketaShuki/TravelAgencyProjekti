<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="shtoFoto.css">
    <title>Shto nje Feedback</title>
</head>
<body>
    <h2>Shto një review nga pushimet tuaja me agjencinë tonë:</h2>
    
    <form action="shtimiIFotos.php" method="post">
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" required><br><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description" rows="4" required></textarea><br><br>

        <label for="image">Select an Image:</label><br>
        <select id="image" name="image">
            <?php
            $image_folder = "fototprojekt/"; 
            $images = array_diff(scandir($image_folder), array('.', '..')); 
            
            foreach ($images as $image) {
                echo "<option value='$image'>$image</option>";
            }
            ?>
        </select><br><br>

        <button type="submit">Save Content</button>
    </form>

</body>
</html>
