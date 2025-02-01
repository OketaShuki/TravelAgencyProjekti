<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Majestic Travel Agency</title>
    <link rel="stylesheet" href="rrethnesh.css">
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
    <div class="container">
        <img src="fototprojekt/lugano.jpg" alt="Your Image">
        <div class="text-overlay">
            <h1>EKSPLORO DESTINACIONET TONA TË MAHNITSHME!</h1>
            <p>Shijo pushimin tënd me ne dhe zbulo çdo gjë që bota ka për të ofruar, nga plazhet mahnitëse deri te malet e bukura!</p>
        </div>
    </div>
    <div class="section-text">
        <h2>Disa nga zyret tona në gjithë Kosovën:</h2>
    </div>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="fototprojekt/zyreprishtin.jpeg" alt="">
            </div>
            <div class="content">
                <h3>Zyrja jonë në Prishtinë</h3>
                <p> Rruga "Luan Haradinaj", Prishtinë 10000.</p>
                <a href="https://www.google.com/maps/place/Luan+Haradinaj,+Prishtina/@42.6624913,21.157413,17z/data=!3m1!4b1!4m6!3m5!1s0x13549ee3dfad5e0d:0x59b31ea19161e4ee!8m2!3d42.6624913!4d21.1599879!16s%2Fg%2F1v70ytft?entry=ttu&g_ep=EgoyMDI0MTAyOS4wIKXMDSoASAFQAw%3D%3D" class="btn">Kliko per drejtime</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="fototprojekt/zyreferizaj.jpg" alt="">
            </div>
            <div class="content">
                <h3>Zyrja jonë në Ferizaj</h3>
                <p>Rruga "Dëshmorët e Kombit", Ferizaj 70000.</p>
                <a href="https://www.google.com/maps/place/D%C3%ABshmor%C3%ABt+e+Kombit,+Ferizaj/@42.3698619,21.1479846,17z/data=!3m1!4b1!4m6!3m5!1s0x13547e581a55f9c5:0x364be216af98687b!8m2!3d42.3698619!4d21.1505595!16s%2Fg%2F1tg97b97?entry=ttu&g_ep=EgoyMDI0MTAyOS4wIKXMDSoASAFQAw%3D%3D" class="btn">Kliko per drejtime</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="fototprojekt/zyregjakove.jpg" alt="">
            </div>
            <div class="content">
                <h3>Zyrja jonë në Gjakovë</h3>
                <p>Rruga "Ismail Qemali", Gjakovë 50000.</p>
                <a href="https://www.google.com/maps/place/Ismail+Qemali+Rd,+Gjakov%C3%AB/@42.3815563,20.4245875,17z/data=!3m1!4b1!4m6!3m5!1s0x1353b1f61c3da109:0x9bb1b33e900aa23f!8m2!3d42.3815563!4d20.4271624!16s%2Fg%2F11bbrj9_c2?entry=ttu&g_ep=EgoyMDI0MTAyOS4wIKXMDSoASAFQAw%3D%3D" class="btn">Kliko per drejtime</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="fototprojekt/zyrepeje.jpeg" alt="">
            </div>
            <div class="content">
                <h3>Zyrja jonë në Pejë</h3>
                <p>Rruga "Haxhi Zeka e Bajrakut", Pejë 30000.</p>
                <a href="https://www.google.com/maps/place/Pej%C3%AB/@42.6612139,20.2980312,17z/data=!3m1!4b1!4m6!3m5!1s0x1352fde1dd90ae21:0xdfb3c5e896474e4a!8m2!3d42.6612139!4d20.3006061!16s%2Fg%2F11y207grc5?entry=ttu&g_ep=EgoyMDI0MTAyOS4wIKXMDSoASAFQAw%3D%3D" class="btn">Kliko per drejtime</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="fototprojekt/zyreprizren.jpg" alt="">
            </div>
            <div class="content">
                <h3>Zyrja jonë në Prizren"</h3>
                <p>Rruga "Emin Pasha", Prizren 20000.</p>
                <a href="https://www.google.com/maps/place/Emin+Pasha,+Prizren/@42.2129961,20.7406839,17z/data=!3m1!4b1!4m6!3m5!1s0x1353950eb9289ad7:0x3d17da44ca5756b3!8m2!3d42.2129961!4d20.7432588!16s%2Fg%2F1tcthrx6?entry=ttu&g_ep=EgoyMDI0MTAyOS4wIKXMDSoASAFQAw%3D%3D" class="btn">Kliko per drejtime</a>
            </div>
        </div>
    </div>
    <br>
    <div class="slider-container">
        <div class="slider" id="slider">
            <div class="slide">
                <img src="fototprojekt/zyreferizaj.jpg" alt="">
                <div class="slide-info">
                    <h3>Zyrja jonë në Ferizaj</h3>
                    <p>Rruga "Dëshmorët e Kombit", Ferizaj 70000.</p>
                </div>
            </div>
            <div class="slide">
                <img src="fototprojekt/zyregjakove.jpg" alt="">
                <div class="slide-info">
                    <h3>Zyrja jonë në Gjakovë</h3>
                    <p>Rruga "Ismail Qemali", Gjakovë 50000.</p>
                </div>
            </div>
            <div class="slide">
                <img src="fototprojekt/zyrepeje.jpeg" alt="">
                <div class="slide-info">
                    <h3>Zyrja jonë në Pejë</h3>
                    <p>Rruga "Haxhi Zeka e Bajrakut", Pejë 30000.</p>
                </div>
            </div>
            <div class="slide">
                <img src="fototprojekt/zyreprizren.jpg" alt="">
                <div class="slide-info">
                    <h3>Zyrja jonë në Prizren</h3>
                    <p>Rruga "Emin Pasha", Prizren 20000.</p>
                </div>
            </div>
        </div>
            <button class="prev" onclick="prevSlide()">&#10094;</button>
            <button class="next" onclick="nextSlide()">&#10095;</button>
        </div>

        <script src="rrethnesh.js"></script>
</body>
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
                    <a href="logout.php">Log Out</a>
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