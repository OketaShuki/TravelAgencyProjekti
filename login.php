<?php
session_start();
include 'DatabaseConnection.php'; // Include your DatabaseConnection class file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username, password, and role from POST
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Create a new instance of the DatabaseConnection class
    $db = new DatabaseConnection();
    $conn = $db->startConnection(); // Call startConnection to get the PDO connection

    // Prepare and execute a query to check the user credentials
    $stmt = $conn->prepare("SELECT id, username, password, role FROM users WHERE username = :username AND role = :role");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':role', $role);
    $stmt->execute();

    // Check if a user was found
    if ($stmt->rowCount() > 0) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        // Verify the password
        if (password_verify($password, $user['password'])) { // Assuming passwords are hashed
            // ✅ Store user information in session
            $_SESSION['user_id'] = $user['id'];  // Store user ID ✅
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];

            // ✅ Debugging (remove after testing)
            // echo "User ID set: " . $_SESSION['user_id'];

            // Redirect based on role
            header("Location: index.php");
            exit;
        } else {
            echo "<script>alert('Invalid password. Please try again.');</script>";
        }
    } else {
        echo "<script>alert('User does not exist or incorrect role.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Majestic Travel Agency</title>
    <link rel="stylesheet" href="login.css">
</head>  
<body>
    <header class="headerContainer">
        <div class="logoand">
            <a href="index.php"> 
                <img src="fototprojekt/LogoProjektit.png" alt="Logo">
            </a>
        </div>
        <div class="faqet">
            <a href="index.php">Home</a>
            <a href="rrethnesh.php">Rreth Nesh</a>
            <a href="ofertat.php">Ofertat</a>
            <a href="contactus.php">Kontakti</a>
            <a href="shembull.php">Destinacionet</a>
            <a href="login.php">Log in/Register</a>
            <a href="shtoFoto.php">FeedBack</a>
        </div>
        <div class="socialmedias">
            <a href="https://www.facebook.com/"><img src="fototprojekt/ikonafacebook.png" alt="Facebook"></a>
            <a href="https://www.instagram.com/"><img src="fototprojekt/ikonainstagramit.png" alt="Instagram"></a>
        </div>
    </header>
    <br>
    <main>
        <div class="wrapper">
            <form method="post" action="login.php" id="loginForm">
                <h1>Log in</h1>
                <div class="input-box">
                    <input type="text" name="username" placeholder="Username" required>
                    <i class='bx bxs-user-circle'></i>
                </div>
                <div class="input-box">
                    <input type="Password" name="password" placeholder="Password" required>
                    <i class='bx bx-lock-alt'></i>
                </div>
                <!-- Role selection for user/admin -->
                <div class="roles">
                    <p>Log in as:</p>
                    <div class="role-option">
                        <input type="radio" id="user" name="role" value="user" checked>
                        <label for="user">User</label>
                    </div>

                    <div class="role-option">
                        <input type="radio" id="admin" name="role" value="admin">
                        <label for="admin">Admin</label>
                    </div>
                </div>
                <button type="submit" class="btn">Login</button>

                <div class="register-link">
                    <p>Don't have an account?
                        <a href="register.php">Register</a></p>
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

    <script src="login.js"></script>
</body>
</html>
