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
    <title>MAJESTIC TRAVEL AGENCY </title>
    <link rel="stylesheet" href="style.css">
    <script>
        function showSidebar(){
            const sidebar = document.querySelector('.sidebar')
            sidebar.style.display = 'flex'
        }
        function hideSidebar(){
            const sidebar = document.querySelector('.sidebar')
            sidebar.style.display = 'none'
        }
    </script>
</head>
<body>
<nav>
    <ul class="sidebar">
        <li onclick="hideSidebar()"><a href="#"><img src="fototprojekt/close.png" alt="close" height="26" width="26"></a></li>
        <li><a href="index.php">Home</a></li>
        <li><a href="rrethnesh.php">Rrethnesh</a></li>
        <li><a href="ofertat.php">Ofertat</a></li>
        <li><a href="contactus.php">Kontakti</a></li>
        <li><a href="shembull.php">Destinacionet</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="feedback.php">Feedback</a></li>
        <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin'): ?>
        <li class="hideOnMobile"><a href="dashboard.php">Dashboard</a></li>
        <li class="hideOnMobile"><a href="nakontaktotabela.php">Mesazhet</a></li>
        <li class="hideOnMobile"><a href="dashboardcontent.php">Contenti</a></li>
        <?php endif; ?>
    </ul> 
    <ul>
        <li class=""><a class="logo-1" href="index.php"><img src="fototprojekt/LogoProjektit.png" alt="LogoProjektit" height="80" width="80"></a></li>
        <li class="hideOnMobile"><a href="index.php">Home</a></li>
        <li class="hideOnMobile"><a href="rrethnesh.php">Rrethnesh</a></li>
        <li class="hideOnMobile"><a href="ofertat.php">Ofertat</a></li>
        <li class="hideOnMobile"><a href="contactus.php">Kontakti</a></li>
        <li class="hideOnMobile"><a href="shembull.php">Destinacionet</a></li>
        <li class="hideOnMobile"><a href="login.php">Login</a></li>
        <li class="hideOnMobile"><a href="feedback.php">Feedback</a></li>
        <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin'): ?>
        <li class="hideOnMobile"><a href="dashboard.php">Dashboard</a></li>
        <li class="hideOnMobile"><a href="nakontaktotabela.php">Mesazhet</a></li>
        <li class="hideOnMobile"><a href="dashboardcontent.php">Contenti</a></li>
        <?php endif; ?>
        <li onclick=showSidebar()><a class="menu-button" href="#"><img src="fototprojekt/threebars.png" alt="threebars" height="80" width="80"></a></li>
    </ul>
</nav>
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

