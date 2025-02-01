<?php
include_once 'contentRepository.php';

$contentRepository = new ContentRepository();
$contents = $contentRepository->getAllContent();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content Dashboard</title>
    <link rel="stylesheet" href="contentdashboard.css">
</head>
<body>
    <h2>Content Table</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Image Path</th>
            <th>Created By</th>
            <th>Modified By</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Edit</th>
        </tr>
        <?php
        foreach ($contents as $content) {
            echo "
               <tr>
                   <td>{$content['id']}</td>
                   <td>{$content['title']}</td>
                   <td>{$content['description']}</td>
                   <td><img src='{$content['image_path']}' alt='Image' style='width: 50px; height: 50px;'></td>
                   <td>{$content['created_by']}</td>
                   <td>{$content['modified_by']}</td>
                   <td>{$content['created_at']}</td>
                   <td>{$content['updated_at']}</td>
                   <td><a href='editcontent.php?id={$content['id']}'>Edit</a></td>
               </tr>
               ";
        }
        ?>
    </table>
</body>
</html>
