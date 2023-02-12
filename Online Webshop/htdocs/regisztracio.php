<?php
    if(isset($_POST['felhasznalo']) && isset($_POST['jelszo']) && isset($_POST['vezeteknev']) && isset($_POST['utonev'])) {
        try {
            // Kapcsolódás
            $dbh = new PDO('mysql:host=localhost;dbname=loginpanel', 'root', '',
                            array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
            $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
            
            // Létezik már a felhasználói név?
            $sqlSelect = "select id from felhasznalok where bejelentkezes = :bejelentkezes";
            $sth = $dbh->prepare($sqlSelect);
            $sth->execute(array(':bejelentkezes' => $_POST['felhasznalo']));
            if($row = $sth->fetch(PDO::FETCH_ASSOC)) {
                $uzenet = "A felhasználó név már foglalt!";
                $ujra = "true";
            }
            else {
                // Ha nem létezik, akkor regisztráljuk
                $sqlInsert = "insert into felhasznalok(id, csaladi_nev, uto_nev, bejelentkezes, jelszo)
                              values(0, :csaladinev, :utonev, :bejelentkezes, :jelszo)";
                $stmt = $dbh->prepare($sqlInsert); 
                $stmt->execute(array(':csaladinev' => $_POST['vezeteknev'], ':utonev' => $_POST['utonev'],
                                     ':bejelentkezes' => $_POST['felhasznalo'], ':jelszo' => sha1($_POST['jelszo']))); 
                if($count = $stmt->rowCount()) {
                    $newid = $dbh->lastInsertId();
                    $uzenet = "A regisztrációja sikeres.<br>Azonosítója: {$newid}";                     
                    $ujra = false;
                }
                else {
                    $uzenet = "A regisztráció nem sikerült.";
                    $ujra = true;
                }
            }
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
        <<!-- EGYÉB ADATOK -->
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
       
      <?php if(isset($uzenet)) { ?>
            <h1><?= $uzenet ?></h1>
            <?php if($ujra) { ?>
                <br>
                <br>
                Próbáld újra!
                <a href="index.php">[Katt]</a>
            <?php } ?>
        <?php } ?>

      </section>
    </section>
  <!-- LOGIN SZEKCIÓ VÉGE -->

  <!-- JAVASCRIPT LINK -->
  <script src="assets/js/main.js"></script>
    </body>  
</html>

