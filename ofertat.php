<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Majestic Travel Agency</title>
    <link rel="stylesheet" href="ofertat.css">
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
        <li class="hideOnMobile"><a href="shembull.php">Shembull</a></li>
        <li class="hideOnMobile"><a href="login.php">Login</a></li>
        <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin'): ?>
        <li class="hideOnMobile"><a href="dashboard.php">Dashboard</a></li>
        <li class="hideOnMobile"><a href="nakontaktotabela.php">Mesazhet</a></li>
        <?php endif; ?>
        <li onclick=showSidebar()><a class="menu-button" href="#"><img src="fototprojekt/threebars.png" alt="threebars" height="80" width="80"></a></li>
    </ul>
</nav>
    <main>
    <section class="packages" id="packages">
        <div class="content">
            <h2>OFERTAT më të rekomanduara:</h2>
            <br>
            <p>Shiko disa nga ofertat më të rekomanduara nga klientët tanë për të përjetuar një udhëtim të jashtëzakonshëm , të mbushur
                me eksperienca unike dhe kujtime të paharrueshme. Majestic Travel Agency përzgjedh
                destinacionet më të dashura dhe paketat më të mira, duke ju sjellë kombinimin perfekt mes cilësisë dhe komoditetit për një pushim ideal.
                Çdo ofertë është zgjedhur me kujdes për të siguruar kënaqësinë dhe përvojën më të mirë të mundshme për çdo udhëtar.</p>
            <br>
        

            <div id="paketat-shqiperia">
                <h2>SHQIPERI:</h2>
                <div class="box-container">
                    <div class="box">
                        <div class="image">
                            <img src="fototprojekt/vlore.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>Vlore</h3>
                            <p>Eksploroni botën me ofertat tona.</p>
                            <div class="price">$500 - $1700</div>
                            <a href="contactus.php" class="btn">Na Kontakto</a>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="fototprojekt/Tirane.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>Tirane</h3>
                            <p>Eksploroni botën me ofertat tona.</p>
                            <div class="price">$1500 - $1700</div>
                            <a href="contactus.php" class="btn">Na Kontakto</a>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="fototprojekt/dhermi.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>Dhermi</h3>
                            <p>Eksploroni botën me ofertat tona.</p>
                            <div class="price">$2300 - $2600</div>
                            <a href="contactus.php" class="btn">Na Kontakto</a>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="fototprojekt/Sarandee.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>Sarande</h3>
                            <p>Eksploroni botën me ofertat tona.</p>
                            <div class="price">$3400 - $4900</div>
                            <a href="contactus.php" class="btn">Na Kontakto</a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div id="paketat-dubai">
                <h2>DUBAI:</h2>
                <br>
                <div class="box-container">
                    <div class="box">
                        <div class="image">
                            <img src="fototprojekt/dubairesort1.jpeg" alt="">
                        </div>
                        <div class="content">
                            <h3>Resorti 1</h3>
                            <p>Eksploroni botën me ofertat tona.</p>
                            <div class="price">$1500 - $1700</div>
                            <a href="contactus.php" class="btn">Na Kontakto</a>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="fototprojekt/dubairesort2.jpeg" alt="">
                        </div>
                        <div class="content">
                            <h3>Resorti 2</h3>
                            <p>Eksploroni botën me ofertat tona.</p>
                            <div class="price">$2300 - $2800</div>
                            <a href="contactus.php" class="btn">Na Kontakto</a>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="fototprojekt/dubairesort3.jpeg" alt="">
                        </div>
                        <div class="content">
                            <h3>Resorti 3</h3>
                            <p>Eksploroni botën me ofertat tona.</p>
                            <div class="price">$1900-$2300</div>
                            <a href="contactus.php" class="btn">Na Kontakto</a>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="fototprojekt/dubairesort4.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>Resorti 4</h3>
                            <p>Eksploroni botën me ofertat tona.</p>
                            <div class="price">$1000 - $1200</div>
                            <a href="contactus.php" class="btn">Na Kontakto</a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div id="paketat-greqi">
                <h2>GREQI:</h2>
                <br>
                <div class="box-container">
                    <div class="box">
                        <div class="image">
                            <img src="fototprojekt/greqisantorini.jpeg" alt="">
                        </div>
                        <div class="content">
                            <h3>Santorini</h3>
                            <p>Eksploroni botën me ofertat tona.s</p>
                            <div class="price">$1500 - $1700</div>
                            <a href="contactus.php" class="btn">Na Kontakto</a>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="fototprojekt/greqihalkidiki.jpeg" alt="">
                        </div>
                        <div class="content">
                            <h3>Halkidiki</h3>
                            <p>Eksploroni botën me ofertat tona.</p>
                            <div class="price">$2300 - $2800</div>
                            <a href="contactus.php" class="btn">Na Kontakto</a>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="fototprojekt/greqiathine.webp" alt="">
                        </div>
                        <div class="content">
                            <h3>Athine</h3>
                            <p>Eksploroni botën me ofertat tona.</p>
                            <div class="price">$1900-$2300</div>
                            <a href="contactus.php" class="btn">Na Kontakto</a>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="fototprojekt/greqizakynthos.jpeg" alt="">
                        </div>
                        <div class="content">
                            <h3>Zakynthos</h3>
                            <p>Eksploroni botën me ofertat tona.</p>
                            <div class="price">$1000 - $1200</div>
                            <a href="contactus.php" class="btn">Na Kontakto</a>
                        </div>
                    </div>
                </div>
            </div>
<br>
<div id="paketat-egypt">
    <h2>EGYPT:</h2>
    <br>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="fototprojekt/egypt1.jpg" alt="">
            </div>
            <div class="content">
                <h3>Resorti 1</h3>
                <p>Eksploroni botën me ofertat tona.</p>
                <div class="price">$1500 - $1700</div>
                <a href="contactus.php" class="btn">Na Kontakto</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="fototprojekt/egypt4.jpg" alt="">
            </div>
            <div class="content">
                <h3>Resorti 2</h3>
                <p>Eksploroni botën me ofertat tona.</p>
                <div class="price">$2300 - $2800</div>
                <a href="contactus.php" class="btn">Na Kontakto</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="fototprojekt/egypt3.jpg" alt="">
            </div>
            <div class="content">
                <h3>Resorti 3</h3>
                <p>Eksploroni botën me ofertat tona.</p>
                <div class="price">$1900-$2300</div>
                <a href="contactus.php" class="btn">Na Kontakto</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="fototprojekt/egypt2.jpeg" alt="">
            </div>
            <div class="content">
                <h3>Resorti 4</h3>
                <p>Eksploroni botën me ofertat tona.</p>
                <div class="price">$1000 - $1200</div>
                <a href="contactus.php" class="btn">Na Kontakto</a>
            </div>
        </div>
    </div>
</div>
<br>
<div id="paketat-turqi">
    <h2>TURQI:</h2>
    <br>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="fototprojekt/turki1.webp" alt="">
            </div>
            <div class="content">
                <h3>Antalya</h3>
                <p>Eksploroni botën me ofertat tona.</p>
                <div class="price">$1500 - $1700</div>
                <a href="contactus.php" class="btn">Na Kontakto</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="fototprojekt/turki2.jpg" alt="">
            </div>
            <div class="content">
                <h3>Alanya</h3>
                <p>Eksploroni botën me ofertat tona.</p>
                <div class="price">$2300 - $2800</div>
                <a href="contactus.php" class="btn">Na Kontakto</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="fototprojekt/turki3.jpg" alt="">
            </div>
            <div class="content">
                <h3>Stamboll</h3>
                <p>Eksploroni botën me ofertat tona.</p>
                <div class="price">$1900-$2300</div>
                <a href="contactus.php" class="btn">Na Kontakto</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="fototprojekt/turki4.jpg" alt="">
            </div>
            <div class="content">
                <h3>Cappadocia</h3>
                <p>Eksploroni botën me ofertat tona.</p>
                <div class="price">$1000 - $1200</div>
                <a href="contactus.php" class="btn">Na Kontakto</a>
            </div>
        </div>
    </div>
</div>
<br>
<div id="paketat-spanje">
    <h2>SPANJE:</h2>
    <br>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="fototprojekt/spanjebarcelon.jpg" alt="">
            </div>
            <div class="content">
                <h3>Barcelona</h3>
                <p>Eksploroni botën me ofertat tona.</p>
                <div class="price">$1500 - $1700</div>
                <a href="contactus.php" class="btn">Na Kontakto</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="fototprojekt/spanjepalma.avif" alt="">
            </div>
            <div class="content">
                <h3>Mallorca</h3>
                <p>Eksploroni botën me ofertat tona.</p>
                <div class="price">$2300 - $2800</div>
                <a href="contactus.php" class="btn">Na Kontakto</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="fototprojekt/spanjemadrid.jpg" alt="">
            </div>
            <div class="content">
                <h3>Madrid</h3>
                <p>Eksploroni botën me ofertat tona.</p>
                <div class="price">$1900-$2300</div>
                <a href="contactus.php" class="btn">Na Kontakto</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="fototprojekt/spanjevalencia.jpeg" alt="">
            </div>
            <div class="content">
                <h3>Valencia</h3>
                <p>Eksploroni botën me ofertat tona.</p>
                <div class="price">$1000 - $1200</div>
                <a href="contactus.php" class="btn">Na Kontakto</a>
            </div>
        </div>
    </div>
</div>
<br>
<div id="paketat-angli">
    <h2>ANGLI:</h2>
    <br>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="fototprojekt/anglilonder.jpg" alt="">
            </div>
            <div class="content">
                <h3>Londer</h3>
                <p>Eksploroni botën me ofertat tona.</p>
                <div class="price">$1500 - $1700</div>
                <a href="contactus.php" class="btn">Na Kontakto</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="fototprojekt/anglilondon2.jpeg" alt="">
            </div>
            <div class="content">
                <h3>Londer</h3>
                <p>Eksploroni botën me ofertat tona.</p>
                <div class="price">$2300 - $2800</div>
                <a href="contactus.php" class="btn">Na Kontakto</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="fototprojekt/anglilondon3.jpg" alt="">
            </div>
            <div class="content">
                <h3>Londer</h3>
                <p>Eksploroni botën me ofertat tona.</p>
                <div class="price">$1900-$2300</div>
                <a href="contactus.php" class="btn">Na Kontakto</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="fototprojekt/anglioxford.jpg" alt="">
            </div>
            <div class="content">
                <h3>Oxford</h3>
                <p>Eksploroni botën me ofertat tona.</p>
                <div class="price">$1000 - $1200</div>
                <a href="contactus.php" class="btn">Na Kontakto</a>
            </div>
        </div>
    </div>
</div>
<br>
<div id="paketat-itali">
    <h2>ITALI:</h2>
    <br>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="fototprojekt/italimilano.jpeg" alt="">
            </div>
            <div class="content">
                <h3>Milano</h3>
                <p>Eksploroni botën me ofertat tona.</p>
                <div class="price">$1500 - $1700</div>
                <a href="contactus.php" class="btn">Na Kontakto</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="fototprojekt/italirome.jpg" alt="">
            </div>
            <div class="content">
                <h3>Rome</h3>
                <p>Eksploroni botën me ofertat tona.</p>
                <div class="price">$2300 - $2800</div>
                <a href="contactus.php" class="btn">Na Kontakto</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="fototprojekt/italituscany.jpeg" alt="">
            </div>
            <div class="content">
                <h3>Toscana</h3>
                <p>Eksploroni botën me ofertat tona.</p>
                <div class="price">$1900-$2300</div>
                <a href="contactus.php" class="btn">Na Kontakto</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="fototprojekt/italivenezia.webp" alt="">
            </div>
            <div class="content">
                <h3>Venezia</h3>
                <p>Eksploroni botën me ofertat tona.</p>
                <div class="price">$1000 - $1200</div>
                <a href="contactus.php" class="btn">Na Kontakto</a>
            </div>
        </div>
    </div>
</div>
<br>
<div id="paketat-zvicerr">
    <h2>ZVICERR:</h2>
    <br>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="fototprojekt/zvicerr.jpg" alt="">
            </div>
            <div class="content">
                <h3>Geneva</h3>
                <p>Eksploroni botën me ofertat tona.</p>
                <div class="price">$1500 - $1700</div>
                <a href="contactus.php" class="btn">Na Kontakto</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="fototprojekt/zvicerr2.jpg" alt="">
            </div>
            <div class="content">
                <h3>Zurich</h3>
                <p>Eksploroni botën me ofertat tona.</p>
                <div class="price">$2300 - $2800</div>
                <a href="contactus.php" class="btn">Na Kontakto</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="fototprojekt/zvicerrgenev.jpg" alt="">
            </div>
            <div class="content">
                <h3>Bern</h3>
                <p>Eksploroni botën me ofertat tona.</p>
                <div class="price">$1900-$2300</div>
                <a href="contactus.php" class="btn">Na Kontakto</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="fototprojekt/zvicerrstmoriz.jpg" alt="">
            </div>
            <div class="content">
                <h3>Luzerne</h3>
                <p>Eksploroni botën me ofertat tona.</p>
                <div class="price">$1000 - $1200</div>
                <a href="contactus.php" class="btn">Na Kontakto</a>
            </div>
        </div>
    </div>
</div>
<br>
<div id="paketat-france">
    <h2>FRANCE:</h2>
    <br>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="fototprojekt/franceparis.jpg" alt="">
            </div>
            <div class="content">
                <h3>Paris</h3>
                <p>Eksploroni botën me ofertat tona.</p>
                <div class="price">$1500 - $1700</div>
                <a href="contactus.php" class="btn">Na Kontakto</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="fototprojekt/france.jpeg" alt="">
            </div>
            <div class="content">
                <h3>Paris</h3>
                <p>Eksploroni botën me ofertat tona.</p>
                <div class="price">$2300 - $2800</div>
                <a href="contactus.php" class="btn">Na Kontakto</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="fototprojekt/france2.jpeg" alt="">
            </div>
            <div class="content">
                <h3>St.Tropez</h3>
                <p>Eksploroni botën me ofertat tona.</p>
                <div class="price">$1900-$2300</div>
                <a href="contactus.php" class="btn">Na Kontakto</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="fototprojekt/francesouth.jpg" alt="">
            </div>
            <div class="content">
                <h3>Cannes</h3>
                <p>Eksploroni botën me ofertat tona.</p>
                <div class="price">$1000 - $1200</div>
                <a href="contactus.php" class="btn">Na Kontakto</a>
            </div>
        </div>
    </div>
</div>
<br>
<div id="paketat-amerike">
    <h2>AMERIKE:</h2>
    <br>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="fototprojekt/amerik1.jpeg" alt="">
            </div>
            <div class="content">
                <h3>New York</h3>
                <p>Eksploroni botën me ofertat tona.</p>
                <div class="price">$1500 - $1700</div>
                <a href="contactus.php" class="btn">Na Kontakto</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="fototprojekt/amerik2.jpeg" alt="">
            </div>
            <div class="content">
                <h3>Brooklyn</h3>
                <p>Eksploroni botën me ofertat tona.</p>
                <div class="price">$2300 - $2800</div>
                <a href="contactus.php" class="btn">Na Kontakto</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="fototprojekt/amerikmiami.webp" alt="">
            </div>
            <div class="content">
                <h3>Hawai</h3>
                <p>Eksploroni botën me ofertat tona.</p>
                <div class="price">$1900-$2300</div>
                <a href="contactus.php" class="btn">Na Kontakto</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="fototprojekt/amrikflorid.jpg" alt="">
            </div>
            <div class="content">
                <h3>Florida</h3>
                <p>Eksploroni botën me ofertat tona.</p>
                <div class="price">$1000 - $1200</div>
                <a href="contactus.php" class="btn">Na Kontakto</a>
            </div>
        </div>
    </div>
</div>
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
</body>

</html>