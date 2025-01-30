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
        <li onclick=showSidebar()><a class="menu-button" href="#"><img src="fototprojekt/threebars.png" alt="threebars" height="80" width="80"></a></li>
    </ul>
</nav>
    <main>
    <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin'): ?>
        <li class="hideOnMobile"><a href="dashboard.php">Dashboard</a></li>
        <li class="hideOnMobile"><a href="nakontaktotabela.php">Mesazhet</a></li>
        <?php endif; ?>
        </div>
        
        <div class="pershkrimet-container">
            <div class="row">
                 <div class="pershkrimi">
                    <figure>
                        <img src="fototprojekt/foto2.jpeg">
                    </figure>
                </div>
                <div class="pershkrimi">
                    <h4>Merita dhe Cmime:</h4>
                    <div class="paragrafi">
                        <p>Majestic Travel Agency ka arritur të fitojë një numër meritesh dhe çmimesh që e njohin
                             përkushtimin dhe cilësinë e shërbimeve që ofrojmë. Ne jemi krenarë që jemi shpallur "Agjencia më e Mirë e Udhëtimit" 
                             në nivel kombëtar në vitin 2020, një çmim që pasqyron përpjekjet tona për t'u ofruar klientëve përvoja udhëtimi të jashtëzakonshme. 
                             Gjithashtu, kemi marrë çmime për "Shërbimin më të Mirë të Klientit", që vërteton angazhimin tonë për të garantuar kënaqësinë e çdo udhëtari.
                             Përveç këtyre, agjencia jonë ka fituar edhe çmime për inovacion në krijimin e paketave të udhëtimit,
                             që përfshijnë itinerare unike dhe ekskluzive, të dizajnuara për të përmbushur nevojat dhe dëshirat e klientëve tanë.
                              Këto merita jo vetëm që na motivojnë për të vazhduar punën tonë të palodhur, 
                            por gjithashtu e forcojnë reputacionin tonë si një nga agjencitë më të besueshme dhe të njohura në industrinë e turizmit.
                        </p>
                    </div>
                    <div class="a">
                        <a href="contactus.php" class="butonii">Na kontakto</a>
                    </div>
                </div>
            </div>
            <div class="row1">
                <div class="pershkrimi1">
                    <h4>Rreth Agjensionit tonë:</h4>
                    <div class="paragrafi1">
                        <p>Majestic Travel Agency është themeluar në vitin 2001 me qëllimin për të ofruar përvojat më të mira të udhëtimit për klientët tanë. 
                            Ne filluam si një ekip i vogël pasionant për udhëtimet dhe eksplorimin e vendeve të reja, dhe nga ajo kohë kemi zgjeruar shërbimet tona
                             për të përfshirë një gamë të gjerë destinacionesh dhe paketash udhëtimi. Me fokus në shërbimin e personalizuar dhe përkushtimin ndaj cilësisë,
                             agjencia jonë ka ndihmuar mijëra udhëtarë 
                            të përjetojnë aventura të paharrueshme. Ne besojmë se çdo udhëtim është një mundësi për të krijuar kujtime të reja dhe për të zbuluar bukuritë e botës.
                        </p>
                    </div>
                    <div class="a1">
                        <a href="contactus.php" class="butoni1">Na kontakto</a>
                    </div>
                </div>
                <div class="pershkrimi1">
                    <figure>
                        <img src="fototprojekt/lugano.jpg">
                    </figure>
                </div>
            </div>
        </div>
        <div class="paragrafetdhemaps">
            <div class="teksti">
                 <h1>Pse te udhetoni me MAJESTIC TRAVEL?</h1>
                
                <p>Zgjedhja e Majestic Travel është një investim në përvojën tuaj të udhëtimit. Ne ofrojmë shërbime të personalizuara dhe itinerare
                    të krijuara posaçërisht për nevojat dhe dëshirat tuaja. Me një ekip profesionistësh të përkushtuar, ne sigurojmë që çdo udhëtim të 
                    jetë një aventurë e paharrueshme, nga akomodimet më të mira deri tek aktivitetet më emocionuese. Ne jemi të angazhuar për të ofruar
                     çmime konkuruese dhe oferta ekskluzive, duke ju lejuar të shijoni më të mirën nga çdo destinacion pa shqetësime. Me mbështetje 24/7 dhe
                     njohuri të thellë të tregut,
                     ne jemi këtu për të bërë çdo hap të udhëtimit tuaj të lehtë dhe të këndshëm. Udhëtoni me ne dhe zbulo të gjitha mundësitë që bota ofron!
                    </p>
                    <br>
                </div>
                <div class="butoni">
                    <a href="ofertat.php" class="package-button">Shiko ofertat tona</a>
                </div>
        </div>

        <div class="slideshow-container">
            <div class="mySlides fade">
              <div class="numbertext">1 / 3</div>
              <img src="fototprojekt/maldive.jpg" style="width:100%">
              <div class="text">Klientet tane </div>
            </div>
          
            <div class="mySlides fade">
              <div class="numbertext">2 / 3</div>
              <img src="fototprojekt/foto2.jpeg" style="width:100%">
              <div class="text">Tropical beach</div>
            </div>
          
            <div class="mySlides fade">
              <div class="numbertext">3 / 3</div>
              <img src="fototprojekt/foto3.jpeg" style="width:100%">
              <div class="text">Navagio Beach Greece</div>
            </div>
          
            <!-- Butonat Next dhe Previous-->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
          </div>
          <br>
          
          <!--dots -->
          <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
        <script src="script.js"></script>
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
    </main>