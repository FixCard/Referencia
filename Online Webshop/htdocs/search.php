<?php
require_once "mysql.php";

$q = $_REQUEST["q"];
$q = "%$q%";
$talalat = "";

if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  
  $sql = "SELECT id, name FROM tblproduct WHERE name LIKE ? LIMIT 10";
  $keres = $conn->prepare($sql);
  $keres->bind_param("s", $q);
  $keres->execute();

  $result = $keres->get_result();
  $resultset = $result->fetch_all(MYSQLI_ASSOC);

  foreach ($resultset as $row) {
      if ($talalat === "") {
        $talalat = "<a>{$row['name']}</a><br>";
      } else {
        $talalat .= "<a>{$row['name']}</a><br>";
      }
  }

  $keres->close();

}
$conn->close();

echo $talalat === "" ? "0 találat" : $talalat;
?> 
