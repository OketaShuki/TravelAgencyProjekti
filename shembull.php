<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Majestic Travel Agency</title>
    <link rel="stylesheet" href="shembull.css">
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
        <li><a href="shembull.php">Shembull</a></li>
        <li><a href="login.php">Login</a></li>
    </ul> 
    <ul>
        <li class=""><a class="logo-1" href="index.php"><img src="fototprojekt/LogoProjektit.png" alt="LogoProjektit" height="80" width="80"></a></li>
        <li class="hideOnMobile"><a href="index.php">Home</a></li>
        <li class="hideOnMobile"><a href="rrethnesh.php">Rrethnesh</a></li>
        <li class="hideOnMobile"><a href="ofertat.php">Ofertat</a></li>
        <li class="hideOnMobile"><a href="contactus.php">Kontakti</a></li>
        <li class="hideOnMobile"><a href="shembull.php">Shembull</a></li>
        <li class="hideOnMobile"><a href="login.php">Login</a></li>
        <li onclick=showSidebar()><a class="menu-button" href="#"><img src="fototprojekt/threebars.png" alt="threebars"></a></li>
    </ul>
</nav>
    <!-- Package Details Section -->
    <section class="package-details">
        <h2>Disa nga vendet me te vizituara nga klientet tane :</h2>
        
        <div class="details">
            <a href="ofertat.php" class="detail">
                <h3>Shqipëri</h3>
                <img src="fototprojekt/albaniaflag.png" alt="" class="detail-image">
                <p>Eksploroni ofertat tona fantastike për Shqipëri</p>
            </a>
            <a href="ofertat.php" class="detail">
                <h3>Dubai</h3>
                <img src="fototprojekt/dubaiflag.jpg" alt="" class="detail-image">
                <p>Përjetoni luksin e Dubait me paketat tona!</p>
            </a>
            <a href="ofertat.php" class="detail">
                <h3>Greqi</h3>
                <img src="fototprojekt/greeceflag.jpeg" alt="" class="detail-image">
                <p>Zbuloni aventurat tona për Greqi!</p>
            </a>
            <a href="ofertat.php" class="detail">
                <h3>Hurghada</h3>
                <img src="fototprojekt/hurghadaflag.jpeg" alt="" class="detail-image">
                <p>Shijoni magjinë e Hurghadës me ofertat tona!</p>
            </a>
            <a href="ofertat.php" class="detail">
                <h3>Turqi</h3>
                <img src="fototprojekt/turkeyflag.webp" alt="" class="detail-image">
                <p>Relaksohuni dhe kënaquni në Turqi me ne!</p>
            </a>
            <a href="ofertat.php" class="detail">
                <h3>Spanjë</h3>
                <img src="fototprojekt/spainflag.jpeg" alt="" class="detail-image">
                <p>Zbuloni bukuritë e Spanjës me paketat tona!</p>
            </a>
            <a href="ofertat.php" class="detail">
                <h3>Angli</h3>
                <img src="fototprojekt/ukflag.jpg" alt="" class="detail-image">
                <p>Eksploroni kulturën unike të Anglisë me ne!</p>
            </a>
            <a href="ofertat.php" class="detail">
                <h3>Itali</h3>
                <img src="fototprojekt/italiflag.png" alt="" class="detail-image">
                <p>Shijoni udhëtimin tuaj në Itali me ofertat tona!</p>
            </a>
            <a href="ofertat.php" class="detail">
                <h3>Zvicërr</h3>
                <img src="fototprojekt/swissflag.webp" alt="" class="detail-image">
                <p>Përjetoni peisazhet e mrekullueshme të Zvicrës!</p>
            </a>
            <a href="ofertat.php" class="detail">
                <h3>Francë</h3>
                <img src="fototprojekt/franceflag.png" alt="" class="detail-image">
                <p>Zbuloni magjinë e Francës me paketat tona të veçanta!</p>
            </a>
            <a href="ofertat.php" class="detail">
                <h3>Shtetet e Bashkuara të Amerikës</h3>
                <img src="fototprojekt/unitedstatesflag.png" alt="" class="detail-image">
                <p>Nisni një aventurë të paharrueshme në Amerikë me ne!</p>
            </a>
        </div>
    </section>
    <div class="contact-boxes">
        <div class="contact-box">
        <img src="fototprojekt/telephone.png" alt="Call Center">
            <p>Nr.Telefonit</p>
            <span>+38349000111</span>
        </div>
        <div class="contact-box">
            <a href="https://web.whatsapp.com/"><img src="fototprojekt/whatsapp.png" alt="WhatsApp"></a>
            <p>WhatsApp</p>
            <span>+38349000111</span>
        </div>
        <div class="contact-box">
            <a href="https://www.viber.com/en/"><img src="fototprojekt/viber.png" alt="Viber"></a>
            <p>Viber</p>
            <span>+38349000111</span>
        </div>
    </div>
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
</body>
</html>