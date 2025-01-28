<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Majestic Travel Agency</title>
    <link rel="stylesheet" href="contactus.css">
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
        <div class="contacttext">
            <h2> DERGO MESAZH:</h2>
            <br>
            <p>
                Kontakto njerin nga agjentet tane per informata me te detajuara:
            </p>
        </div>
        <form id="myForm" class="contactus" onsubmit="return validateForm()">
            <p class="contactp">Na Kontakto</p>
            <br>
            <div class="login">
                <input type="text" placeholder="Emri" class="input" id="emri">
                <input type="email" placeholder="Email" class="input" id="email">
            </div>
    
            <div class="subject">
                <input type="text" placeholder="Titulli" class="input" id="titulli">
            </div>
    
            <div class="msg">
                <textarea class="area" placeholder="Mesazhi" id="mesazhi"></textarea>
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

<script src="contactus.js"></script>
</body>
</html>