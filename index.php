<?php 
function generaPassword($len) {

$pool = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+[]{};:,.<>/?";
  $pwd = "";
  for ($i = 0; $i < $len; $i++) {
  $idx = random_int(0, strlen($pool)-1); 
  $pwd .= $pool[$idx];
  }

  return $pwd;
}
if (isset($_GET['length'])) {
    $len = (int) $_GET['length'];
    if ($len < 8) $len = 8;
    if ($len > 64) $len = 64;
    $pwd = generaPassword($len);
    echo "<p>Password generata: <strong>" . htmlspecialchars($pwd) . "</strong></p>";
}
else {
    echo "<p>Inserisci la lunghezza della password (minimo 8, massimo 64).</p>";
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