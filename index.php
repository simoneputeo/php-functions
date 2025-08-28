<?php 
session_start();
require_once 'functions.php'; 

if (isset($_GET['length'])) {
    $len = (int) $_GET['length'];
    if ($len < 8) $len = 8;
    if ($len > 64) $len = 64;

    $_SESSION['pwd'] = generaPassword($len);
    header('Location: result.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<body>
<h1>Generatore di Password</h1>
<form method="GET">
  Lunghezza: <input type="number" name="length" min="8" max="64" required>
    <br>
  <button type="submit">Genera</button>
  </form>
</body>
</html>