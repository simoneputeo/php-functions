<?php 
session_start();
require_once './functions.php'; 

if (isset($_GET['length'])) {
    $len = (int) $_GET['length'];
    if ($len < 8) $len = 8;
    if ($len > 64) $len = 64;
$pool = "";
if (isset($_GET['include_lowercase'])) { $pool .= "abcdefghijklmnopqrstuvwxyz"; }
if (isset($_GET['include_uppercase'])) { $pool .= "ABCDEFGHIJKLMNOPQRSTUVWXYZ"; }
if (isset($_GET['include_numbers'])) { $pool .= "0123456789"; }
if (isset($_GET['include_symbols'])) { $pool .= "!@#$%^&*()-_=+[]{};:,.<>/?"; }

if ($pool === "") {
    echo "<h2>Seleziona almeno una tipologia di caratteri!</h2>";
  } else {
    $_SESSION['pwd'] = generaPassword($len, $pool);
    header('Location: ./result.php');
    exit;
}
}
?>

<!DOCTYPE html>
<html>
<body>
<h1>Generatore di Password</h1>
<form method="GET">
  Lunghezza: <input type="number" name="length" min="8" max="64" required>
    <br>
    <input type="checkbox" name="include_symbols" >Simboli
  <br>
  <input type="checkbox" name="include_numbers" >Numeri
  <br>
  <input type="checkbox" name="include_uppercase" >Maiuscole
  <br>
 <input type="checkbox" name="include_lowercase" checked>Minuscole
  <br>
  <button type="submit">Genera</button>
  </form>
</body>
</html>