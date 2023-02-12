<?php
define('DB_SRV', 'localhost:3306');
define('DB_DBASE', 'productlist');
define('DB_USR', 'root');
define('DB_PW', '');

$conn = mysqli_connect(DB_SRV,DB_USR,DB_PW,DB_DBASE);
if($conn === false){
    die('Hiba: --->> '.mysqli_connect_error());
}
?>