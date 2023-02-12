<!DOCTYPE html>
<html>
  <head>

     <!-- EGYÉB ADATOK -->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="description" content="eFOSZK Webáruház">
     <meta name="keywords" content="áruház, shop, webshop, eFOSZK">
     <meta name="author" content="Baranyai András, Dormán László, Szabó Adrián">
    <meta charset="utf-8">

    <!-- LINKELÉS / STÍLUS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/png" href="assets/img/favicon.png">

    <!-- OLDAL CÍM -->
    <title>eFOSZK — Webáruház, minden ami kell!</title>

  </head>
  <body>
    
     <!-- FEJLÉC ELEJE -->
     <header>
      <div class="nav container">

        <!-- Webshop logó + szöveg -->
        <img src="assets/img/logo4.png" alt="" style="width: 150px;">
            <p class="logo">Kecskemét legjobb online webshopja!</p>

      </div>
      <hr style="border: 1px solid;">
  </header>
  <!-- FEJLÉC VÉGE -->

  <!-- LOGIN SZEKCIÓ ELEJE -->
    <section class="section-loginsignuo-bckgrnd">
      <section class="section-loginsignup-info">
        <form action = "belepes.php" method = "post">
          <fieldset style="width: 250px;">
           <legend>Bejelentkezés</legend>
            <br>
           <input type="text" name="felhasznalo" placeholder=" Felhasználó" required><br><br>
           <input type="password" name="jelszo" placeholder=" Jelszó" required><br><br>
            <input type="submit" name="belepes" value=" Belépés " class="btn-login">
            <br>&nbsp;
          </fieldset>
       </form>
      <br>
       
      
        <form action = "regisztracio.php" method = "post">
         <fieldset style="width: 250px;">
           <legend>Regisztráció</legend>
           <br>
           <input type="text" name="vezeteknev" placeholder=" Vezetéknév" required><br><br>
           <input type="text" name="utonev" placeholder=" Utónév" required><br><br>
           <input type="text" name="felhasznalo" placeholder=" Felhasználó név" required><br><br>
           <input type="password" name="jelszo" placeholder=" Jelszó" required><br><br>
           <input type="submit" name="regisztracio" value=" Regisztráció " class="btn-register">
            <br>&nbsp;
         </fieldset>
        </form>
      </section>
    </section>
  <!-- LOGIN SZEKCIÓ VÉGE -->

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