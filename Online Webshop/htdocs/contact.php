<!DOCTYPE html>
<html lang="hu">
<head>
    <!-- EGYÉB ADATOK -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="eFOSZK Webáruház">
    <meta name="keywords" content="áruház, shop, webshop, eFOSZK">
    <meta name="author" content="Baranyai András, Dormán László, Szabó Adrián">

    <!-- OLDAL CÍM -->
    <title>E-FOSZK — Webáruház, minden ami kell!</title>

    <!-- LINKELÉS / STÍLUS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
</head>
<body>
    <!-- FEJLÉC ELEJE -->
    <header>
        <div class="nav container">

            <!-- Home -->
            <a href="pelda.php">
                <i class='bx bxs-home' id="home"></i>
            </a>
            <!-- Webshop logó + szöveg -->
            <img src="assets/img/logo4.png" alt="" style="width: 150px;">
            <p class="logo">Kecskemét legjobb online webshopja!</p>
            <!-- Bemutatkozás -->
            <a href="info.php">
                <i class='bx bxs-info-circle' id="info"></i>
            </a>
            <!-- Kapcsolat -->
            <a href="contact.php">
                <i class='bx bx-map' id="contact" style="color: #107C10;"></i>
            </a>
            <!-- Kijelentkezés -->
            <a href="logout.php">
                <i class='bx bx-exit' onclick="myFunction()"   id="contact"></i>
                      
            </a>

            <script>
                function myFunction() {
                alert("Sikeres kijelentkezés! :)");
                }
            </script>

            <!-- Kosár -->
            <i class='bx bx-shopping-bag' id="cart-icon"></i>
            <!-- Kosár fül -->
            <div class="cart">
                <h2 class="cart-title">Kosár</h2>
                <!-- Kosár Tartalom -->
                <div class="cart-content"></div>
                <!-- Összesen -->
                <div class="total">
                    <div class="total-title">Összesen:</div>
                    <div class="total-price">0 Ft</div>
                </div>
                <!-- "Megveszem gomb" -->
                <a href="#" class="btn-buy" role="button">Megveszem</a>
                <!-- Kosár Bezárás -->
                <i class='bx bx-x' id="close-cart"></i>
            </div>
            
        </div>
        <hr style="border: 1px solid;">
    </header>
    <!-- FEJLÉC VÉGE -->

    <!-- INFO SZEKCIÓ ELEJE -->
    <section class="infopadding container">
    <h4>Bejelentkezve mint: </h4>
    <?php 
        session_start();
        echo $_SESSION['csnev'];
    ?>
    <?php
        echo $_SESSION['utnev'];
    ?>
        <h2 class="section-title-info">— Elérhetőség —</h2>
        <hr style="border: 2px solid;">
        <div class="rolunk">
            <h2 style="color: #107C10;">Nyitvatartás:</h1>
            <strong><p>Hétfő:</strong> 07:00-19:00</p>
            <strong><p>Kedd:</strong> 07:00-19:00</p>
            <strong><p>Szerda:</strong> 07:00-19:00</p>
            <strong><p>Csütörtök:</strong> 07:00-19:00</p>
            <strong><p>Péntek:</strong> 07:00-19:00</p>
            <strong><p>Szombat:</strong> 10:00-16:00</p>
            <strong><p style="color: #E50914;">Vasárnap:</strong> ZÁRVA</p>
            <hr>
            <h2 style="color: #107C10;">Kapcsolat:</h2>
            <strong><p>Telefon:</strong> +36 20 212 2938</p>
            <strong><p>Fax.:</strong> +1-234-5678910</p>
            <strong><p>Email:</strong> efoszk@efoszk.hu</p>
            <strong><p>Cím:</strong> 6000 Kecskemét, Izsáki út. 5.</p>
        </div>
        <hr style="border: 2px solid;">
        <div>
            <br>
            <h1 style="color: #107C10;">Térkép:</h1>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1063.3353428086473!2d19.66917279089467!3d46.89604899806565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1shu!2shu!4v1650642399833!5m2!1shu!2shu" 
                width="1068" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>  
        </div>
    </section>
    <!-- INFO SZEKCIÓ VÉGE -->

    <!-- LÁBLÉC ELEJE -->
    <hr style="border: 1px solid #1DB954;">
    <footer>
        <div class="fnav container">

            <!-- Szerzői jog -->
            <span>
                © Copyright <a href="https://gamf.uni-neumann.hu/felsooktatasi-szakkepzesek/" target="_blank" style="color: #1DB954;"><strong id="CR">E-FOSZK.</strong></a> Minden jog fenttartva
            </span>

            <!-- Linkek -->
            <span>
                <a href="https://www.facebook.com/NJE.HOK" target="_blank" style="color: #4267B2;">Facebook</a> —
                <a href="https://www.youtube.com/channel/UCPmFq4cHmy_0kr6KLCCmyQA" target="_blank" style="color: #FF0000;">YouTube</a> — 
                <a href="https://www.instagram.com/uni_neumann/" target="_blank" style="color: #FCAF45;">Instagram</a>
            </span>
        </div>
    </footer>
    <!-- LÁBLÉC VÉGE -->

    <!-- JAVASCRIPT LINK -->
    <script src="assets/js/main.js"></script>
</body>
</html>