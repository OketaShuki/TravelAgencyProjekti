<?php
include 'DatabaseConnection.php';

$db = new DatabaseConnection();
$conn = $db->startConnection();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Majestic Travel Agency - Feedback</title>
    <link rel="stylesheet" href="feedback.css"> 
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

    <main>
        <br>
        <h1>FEEDBACK PREJ KLIENTEVE TANË:</h1>
       
        <?php
        
        $sql = "SELECT title, description, image_path, created_by, created_at FROM content ORDER BY created_at DESC";
        $result = $conn->query($sql);

        if ($result->rowCount() > 0) {
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                
                $formattedDate = date("F j, Y, g:i a", strtotime($row['created_at']));

                echo "<div class='feedback-container'>";
                echo "<img src='{$row['image_path']}' alt='Image' />";
                echo "<div class='text-content'>";
                echo "<h2>{$row['title']}</h2>";
                echo "<p>{$row['description']}</p>";
                echo "<p class='user-info'>Submitted by: User ID {$row['created_by']}</p>";
                echo "<p class='date-info'>Posted on: {$formattedDate}</p>"; // ✅ Display formatted date
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "<p>No content available.</p>";
        }
        ?>
    </main>
    <footer class="footer-button-container">
    <div class="footer-content-wrapper">
        
        
        <div class="footer-feedback">
            <h3 class="footer-title">SHKRUANI FEEDBACKUN TUAJ</h3>
            <p class="footer-text">Na tregoni përvojën tuaj me Majestic Travel Agency.  
                Ne vlerësojmë çdo mendim dhe dëshirojmë të përmirësojmë shërbimet tona!</p>
            <a href="shtoFoto.php" class="footer-button">SHTO FEEDBACK</a>
        </div>

       
        <div class="footer-nav">
            <h3 class="footer-title">NAVIGIMI</h3>
            <ul class="footer-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="rrethnesh.php">Rreth Nesh</a></li>
                <li><a href="ofertat.php">Ofertat</a></li>
                <li><a href="contactus.php">Kontakti</a></li>
                <li><a href="shembull.php">Destinacionet</a></li>
            </ul>
        </div>

        
        <div class="footer-contact">
            <h3 class="footer-title">KONTAKTI</h3>
            <p><strong>Adresa:</strong> Prishtinë, Kosovë</p>
            <p><strong>Email:</strong> majestictravel@gmail.com</p>
            <p><strong>Tel:</strong> +383 49 000 111</p>
            <div class="social-icons">
                <a href="https://www.facebook.com/"><img src="fototprojekt/ikonafacebook.png" alt="Facebook"></a>
                <a href="https://www.instagram.com/"><img src="fototprojekt/ikonainstagramit.png" alt="Instagram"></a>
            </div>
        </div>
    </div>
    
    
    <h5 class="footer-copyright">© 2024 MAJESTIC TRAVEL. Të gjitha të drejtat e rezervuara.</h5>
</footer>


</body>
</html>
