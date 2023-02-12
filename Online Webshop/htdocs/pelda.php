

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
                <i class='bx bxs-home' id="home" style="color: #107C10;"></i>
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
                <i class='bx bx-map' id="contact"></i>
            </a>
            <!-- Kijelentkezés -->
            <a href="logout.php">
                <i class='bx bx-exit' onclick="myFunction()" id="contact"></i>
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
    

    <!-- TERMÉK SZEKCIÓ ELEJE -->
    <section class="shop container">
    
    <form>
        <input type="text" placeholder="Kereső" onkeyup="search(this.value)">
        <div id="drop-search">
        <span id="result"></span>
        <span id="more"></span>
        </div>
    </form>
    <br>
    <h4>Bejelentkezve mint: </h4>
    <?php 
        session_start();
        echo $_SESSION['csnev'];
    ?>
    <?php
        echo $_SESSION['utnev'];
    ?>

        

        <h2 class="section-title" style="font-family: 'Rubik Mono One', sans-serif; font-weight: 400;">Termékeink</h2>
    
        <!-- Termék tartalom -->
        <div class="shop-content">
            <!-- 1 -->
            <div class="product-box">
                <img src="assets/img/termek1.jpg" alt="" class="product-img">
                <h2 class="product-title">I9 - 10900K / RTX 3080 Gamer PC</h2>
                <span>Ár: </span><span class="price">749990 Ft</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
             <!-- 2 -->
             <div class="product-box">
                <img src="assets/img/termek2.jpg" alt="" class="product-img">
                <h2 class="product-title">I7 - 9770K / RTX 3070 Gamer PC</h2>
                <span>Ár: </span><span class="price">660000 Ft</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
             <!-- 3 -->
             <div class="product-box">
                <img src="assets/img/termek3.jpg" alt="" class="product-img">
                <h2 class="product-title">R5 - 3600X / GTX 1660 Ti Gamer PC</h2>
                <span>Ár: </span><span class="price">545990 Ft</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
             <!-- 4 -->
             <div class="product-box">
                <img src="assets/img/termek4.jpg" alt="" class="product-img">
                <h2 class="product-title">I5 - 10400F / RTX 3060 Gamer PC</h2>
                <span>Ár: </span><span class="price">432000 Ft</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
             <!-- 5 -->
             <div class="product-box">
                <img src="assets/img/termek5.jpg" alt="" class="product-img">
                <h2 class="product-title">Arozzi Verona V2 Gamer szék</h2>
                <span>Ár: </span><span class="price">75000 Ft</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
             <!-- 6 -->
             <div class="product-box">
                <img src="assets/img/termek6.jpg" alt="" class="product-img">
                <h2 class="product-title">NATEC Genesis Nitro 550 Gamer szék</h2>
                <span>Ár: </span><span class="price">45600 Ft</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
             <!-- 7 -->
             <div class="product-box">
                <img src="assets/img/termek7.jpg" alt="" class="product-img">
                <h2 class="product-title">Nitro Concepts S300 Gamer szék</h2>
                <span>Ár: </span><span class="price">34800 Ft</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
             <!-- 8 -->
             <div class="product-box">
                <img src="assets/img/termek8.jpg" alt="" class="product-img">
                <h2 class="product-title">Samsung UE43TU7022</h2>
                <span>Ár: </span><span class="price">1265060 Ft</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
             <!-- 9 -->
             <div class="product-box">
                <img src="assets/img/termek9.jpg" alt="" class="product-img">
                <h2 class="product-title">LG OLED55C11LB</h2>
                <span>Ár: </span><span class="price">890000 Ft</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
             <!-- 10 -->
             <div class="product-box">
                <img src="assets/img/termek10.jpg" alt="" class="product-img">
                <h2 class="product-title">Xiaomi Mi TV P1 32</h2>
                <span>Ár: </span><span class="price">956990 Ft</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
             <!-- 11 -->
             <div class="product-box">
                <img src="assets/img/termek11.jpg" alt="" class="product-img">
                <h2 class="product-title">Philips 55OLED706/12</h2>
                <span>Ár: </span><span class="price">689750 Ft</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
             <!-- 12 -->
             <div class="product-box">
                <img src="assets/img/termek12.jpg" alt="" class="product-img">
                <h2 class="product-title">Sony Bravia KD-43X85J</h2>
                <span>Ár: </span><span class="price">740000 Ft</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
        </div>
    </section>
    <!-- TERMÉK SZEKCIÓ VÉGE -->

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
<script>
function search(str) {
  if (str.length == 0) {
    document.getElementById("result").innerHTML = "";
    document.getElementById("more").innerHTML = "";
    document.getElementById("drop-search").style.display = "none";
    return;
  } 
  else
  {
    const xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
        document.getElementById("drop-search").style.display = "flex";
        document.getElementById("result").innerHTML = this.responseText;
    }
  xmlhttp.open("GET", "search.php?q=" + str);
  xmlhttp.send();
  }
}
</script>
    <!-- JAVASCRIPT LINK -->
    <script src="assets/js/main.js"></script>
</body>
</html>