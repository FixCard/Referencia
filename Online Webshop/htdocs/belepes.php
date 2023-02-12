<?php
    if(isset($_POST['felhasznalo']) && isset($_POST['jelszo'])) {
        try {
            // Kapcsolódás
            $dbh = new PDO('mysql:host=localhost;dbname=loginpanel', 'root', '',
                            array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
            $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
            
            // Felhsználó keresése
            $sqlSelect = "select id, csaladi_nev, uto_nev from felhasznalok where bejelentkezes = :bejelentkezes and jelszo = sha1(:jelszo)";
            $sth = $dbh->prepare($sqlSelect);
            $sth->execute(array(':bejelentkezes' => $_POST['felhasznalo'], ':jelszo' => $_POST['jelszo']));
            $row = $sth->fetch(PDO::FETCH_ASSOC);
        }
        catch (PDOException $e) {
            echo "Hiba: ".$e->getMessage();
        }      
    }
    else {
        header("Location: index.php");
    }
?>
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

  <?php if(isset($row)) { ?>
            <?php if($row) { 
                session_start();
                $_SESSION['Bejelentkezve'] = true;
                $_SESSION['csnev'] = $row["csaladi_nev"];
                $_SESSION['utnev'] = $row["uto_nev"];
                ?>
                <br><br><br>
                <h2 class="section-title" style="font-family: 'Rubik Mono One', sans-serif; font-weight: 400;">Bejelentkezett:</h2>
                <section class="section-loginsignup-info">
                Azonosító: <strong><?= $row['id'] ?></strong><br>
                Név: <strong><?= $row['csaladi_nev']." ".$row['uto_nev'] ?></strong>
                <br><br>
                <h4>A főoldalhoz kattints ide -->
                <a href="pelda.php" >[Katt]</a></h4>
                </section>
            <?php } else { ?>
                <br><br><br>
                <h2 class="section-title" style="font-family: 'Rubik Mono One', sans-serif; font-weight: 400;">A bejelentkezés nem sikerült!</h2>
                <section class="section-loginsignup-info">
                <br><br><br>
                <h4>Újra próbálkozáshoz kattints ide -->
                <a href="index.php" >[Katt]</a></h4>
                </section>
            <?php } ?>
        <?php } ?>

  <!-- JAVASCRIPT LINK -->
  <script src="assets/js/main.js"></script>

        
    </body>
</html>