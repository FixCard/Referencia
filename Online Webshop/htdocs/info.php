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
                <i class='bx bxs-info-circle' id="info" style="color: #107C10;"></i>
            </a>
            <!-- Kapcsolat -->
            <a href="contact.php">
                <i class='bx bx-map' id="contact"></i>
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
        <h2 class="section-title-info">— Cégismertető —</h2>
        <!-- INFO 1 tartalom -->
        <hr style="border: 2px solid;">
        <div>
            <p class="rolunk" id="infoeffect">
                Cégünk 2022-ben alakult és elkötelezettségünknek hála folyamatosan növekszik vásárlóink 
                legnagyobb megelégedettségére. Ön biztos lehet abban, hogy mi 10 év múlva is a piacon leszünk, 
                ellentétben azon cégekkel, akik fél maximum 1 éven belül felszámolásra kerülnek, így esetleges 
                garanciális igényét már nem lesz hova benyújtania.
            </p>
        </div>
        <hr style="border: 2px solid;">
    </section>
    <section class="infopadding container">
        <h2 class="section-title-info">— Céljaink —</h2>

        <!-- INFO 2 tartalom -->
        <hr style="border: 2px solid;">
        <div>
            <p class="rolunk" id="infoeffect">
                Fő célkitűzésünk a vásárlások színvonalának emelése, így webshopunkat folyamatosan modernizáljuk, 
                hogy kedves vevőink a lehető leggyorsabban és legjobb áron vehessék birtokba a kiszemelt terméket. 
                Eladásaink után minden egyes adóforint befizetésre kerül, ezzel is gyarapítva a Magyar gazdaságot!
            </p>
        </div>
        <hr style="border: 2px solid;">
    </section>
    <section class="infopadding container">
        <h2 class="section-title-info">— Termékek —</h2>

        <!-- INFO 2 tartalom -->
        <hr style="border: 2px solid;">
        <div>
            <p class="rolunk" id="infoeffect">
                Webshopunk termékkínálata folyamatosan növekszik, ezáltal az informatikai eszközök széles választáka megtalálható 
                nálunk, továbbá, számítógépek, notebookok, konzolok és ezek tartozékait, kiegészítőit is beszerezheti cégünknél.
            </p>
        </div>
        <hr style="border: 2px solid;">
    </section>
    <section class="infopadding container">
        <h2 class="section-title-info">— Miért minket? —</h2>

        <!-- INFO 3 tartalom -->
        <hr style="border: 2px solid;">
        <div>
            <p class="rolunk" id="infoeffect">
                Amennyiben tőlünk vásárol, időt és pénzt spórolunk meg Önnek. Nincs sorbanállás, a kiszemelt készleten 
                lévő terméket általában 1-3 munkanapon belül otthonában átveheti. Új és használt termékeinkre a gyártó 
                és a magyar jogszabályok által biztosított garanciát vállaljuk, minden új készülék vásárlásnál 27% áfás 
                számlát, használt készüléknél 0% áfás számlát kap kézhez, így az esetleges garanciális ügyintézésnél 
                semmilyen problémába nem ütközhet.
            </p>
        </div>
        <hr style="border: 2px solid;">
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