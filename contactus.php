<?php
session_start();

// Database connection
include('DatabaseConnection.php');  // Assuming you have this file for DB connection

// Create a new instance of DatabaseConnection
$db = new DatabaseConnection();
$conn = $db->startConnection();

// Process form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['emri'], $_POST['email'], $_POST['titulli'], $_POST['mesazhi'])) {
        // Sanitize the input data to prevent SQL injection or malformed data
        $emri = htmlspecialchars(trim($_POST['emri']));
        $email = htmlspecialchars(trim($_POST['email']));
        $titulli = htmlspecialchars(trim($_POST['titulli']));
        $mesazhi = htmlspecialchars(trim($_POST['mesazhi']));

        // Prepare SQL query to insert contact message into the database
        $query = "INSERT INTO contactus (emri, email, titulli, mesazhi) VALUES (:emri, :email, :titulli, :mesazhi)";
        $stmt = $conn->prepare($query);

        // Bind parameters
        $stmt->bindParam(':emri', $emri);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':titulli', $titulli);
        $stmt->bindParam(':mesazhi', $mesazhi);
     $stmt->execute();
          
    } 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="contactus.css">
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
        <?php endif; ?>
        <li onclick=showSidebar()><a class="menu-button" href="#"><img src="fototprojekt/threebars.png" alt="threebars" height="80" width="80"></a></li>
    </ul>
</nav>
    <main>
        <div class="contacttext">
            <h2>DERGO MESAZH:</h2>
            <br>
            <p>Kontakto njerin nga agjentet tane per informata me te detajuara:</p>
        </div>

        <form id="myForm" class="contactus" method="POST" action="contactus.php" onsubmit="return validateForm()">
            <p class="contactp">Na Kontakto</p>
            <br>
            <div class="login">
                <input type="text" placeholder="Emri" class="input" id="emri" name="emri">
                <input type="email" placeholder="Email" class="input" id="email" name="email">
            </div>
    
            <div class="subject">
                <input type="text" placeholder="Titulli" class="input" id="titulli" name="titulli">
            </div>
    
            <div class="msg">
                <textarea class="area" placeholder="Mesazhi" id="mesazhi" name="mesazhi"></textarea>
            </div>
    
            <div>
                <button type="submit" class="btn">Dergo Mesazhin</button>
            </div>
        </form>
    </main>

    <footer>
        <div class="footer-div">
            <div class="travel-footer">
                <h3 class="travel-titulli">MAJESTIC TRAVEL AGENCY</h3>
                <p>Zgjedhja e Majestic Travel Agency <br>është vendimi ideal për ata që kërkojnë <br>
                    një përvojë udhëtimi të jashtëzakonshme, 
                    <br>të personalizuar dhe të sigurt.Ne jemi <br>të përkushtuar të ofrojmë shërbime të cilësisë <br>së lartë duke zgjedhur me kujdes destinacionet <br>
                    dhe paketat që përshtaten me çdo stil dhe buxhet. </p>
            </div>
            <div class="footer-nav">
                <h3 class="nav-titulli">Faqet</h3>
                <div class="nav-elements">
                    <a href="index.php">Home</a>
                    <a href="rrethnesh.php">Rreth Nesh</a>
                    <a href="ofertat.php">Ofertat</a>
                    <a href="contactus.php">Kontakti</a>
                    <a href="shembull.php">Destinacionet</a>
                    <a href="login.php">Log in/Register</a>
                    <a href="feedback.php">Feedback</a>
                </div>
            </div>
            <div class="footer-contact">
                <h3 class="nav-titulli">Kontakti</h3>
                <p>Kosove, Prishtine</p>
                <p>Lagja NR, Str, 10000</p>
                <p>majestictravel@gmail.com</p>
                <p>+38349000111</p>
            </div>
        </div>
        <h5 class="footer-content">MAJESTIC TRAVEL All rights reserved</h5>
    </footer>

    <script src="contactus.js"></script>
</body>
</html>