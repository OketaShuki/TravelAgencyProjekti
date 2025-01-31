<?php
include('DatabaseConnection.php');

$db = new DatabaseConnection();
$conn = $db->startConnection();


$message = '';
$messageType = '';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
    if (isset($_POST['username'], $_POST['password'], $_POST['email'], $_POST['confirm_password'])) {
       
        $username = $_POST['username'];
        $password = $_POST['password'];  
        $email = $_POST['email'];
        $confirmPassword = $_POST['confirm_password'];

      
        if ($password !== $confirmPassword) {
            $message = "Passwords do not match!";
            $messageType = "error";
        } else {
            
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            
            $query = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
            $stmt = $conn->prepare($query);

            
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $hashedPassword);
            $stmt->execute();
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Majestic Travel Agency</title>
    <link rel="stylesheet" href="register.css">
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
        <div class="wrapper3">
            <form action="" class="form3" method="post">
                <h1>Sign Up</h1>
                
                <div class="input-box3">
                    <input type="text" name="username" placeholder="Username" required>
                    <i class='bx bxs-user-circle'></i>
                </div>
                <div class="input-box3">
                    <input type="email" name="email" placeholder="E-mail" required>
                    <i class='bx bxs-user-circle'></i>
                </div>
                <div class="input-box3">
                    <input type="password" name="password" placeholder="Password" required>
                    <i class='bx bxs-user-circle'></i>
                </div>
                <div class="input-box3">
                    <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                    <i class='bx bxs-user-circle'></i>
                </div>
                <!-- Role selection for user/admin -->
                <div class="roles">
                 <p>Register as:</p>
                 <div class="role-option">
                    <input type="radio" id="user" name="role" value="user" checked>
                 <label for="user">User</label>
                </div>
                 <div class="role-option">
                 <input type="radio" id="admin" name="role" value="admin">
               <label for="admin">Admin</label>
    </div>
</div>

                <button type="submit" class="btn3">Sign Up</button>
                <div class="back-to-login">
                    <p>Already have an account?<a href="login.php">Log in</a></p>
                </div>
            </form>
        </div>
    </main>

    <footer>
        <div class="footer-div">
            <div class="travel-footer">
                <h3 class="travel-titulli">MAJESTIC TRAVEL AGENCY</h3>
                <p>Discover our stunning beachfront apartments, <br>each offering breathtaking views of the ocean. <br>Our accommodations range from cozy studios <br> to spacious three-bedroom units, <br>catering to various preferences. </p>
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
    <script src="register.js"></script>
</body>
</html>
