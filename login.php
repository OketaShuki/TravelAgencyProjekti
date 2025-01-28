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
            <a href="shembull.php">Shembull</a>
            <a href="login.php">Log in/Register</a>
        </div>
        <div class="socialmedias">
            <a href="https://www.facebook.com/" target="_blank"><img src="fototprojekt/ikonafacebook.png" alt="Facebook"></a>
            <a href="https://www.instagram.com/" target="_blank"><img src="fototprojekt/ikonainstagramit.png" alt="Instagram"></a>
        </div>
    </header>
    <main>
        <div class="wrapper-background">
            <div class="wrapper">
                <form action="" method="post">
                    <h1>Log In</h1>
                    <div class="input-box">
                        <input type="text" placeholder="Username" required>
                    </div>
                    <div class="input-box">
                        <input type="password" placeholder="Password" required>
                    </div>

                    <button type="submit" class="btn">Log In</button>
                    
                    <div class="register-link">
                        <p>Don't have an account?
                            <a href="register.php">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <script src="login.js"></script>
</body>
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
                <a href="shembull.php">Shembull</a>
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
</html>