<?php require_once 'functions.php'; ?>
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