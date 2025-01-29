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
        <li onclick=showSidebar()><a class="menu-button" href="#"><img src="fototprojekt/threebars.png" alt="threebars" height="26" width="26"></a></li>
    </ul>
</nav>
    <main>
        <div class="wrapper-background">
            <div class="wrapper3">
                <form action="" class="form3" method="post">
                    <h1>Sign Up</h1>
                    
                    <div class="input-box3">
                        <input type="text" placeholder="Username" >
                        
                    </div>
                    <div class="input-box3">
                        <input type="email" placeholder="E-mail" >
                        
                    </div>
                    <div class="input-box3">
                        <input type="password" placeholder="Password" >
                        
                    </div>
                    <div class="input-box3">
                        <input type="password" placeholder="Confirm Password" >
                        
                    </div>
            
                    <button type="submit" class="btn3">Sign Up</button>
                    <div class="back-to-login">
                        <p>Already have an account?
                            <a href="login.php">Log in</a></p>
                    </div>
            </div>
            </form>
        
        </div>

    </main>
    <script src="register.js"></script>
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