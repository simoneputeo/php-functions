<?php
session_start();
if (!isset($_SESSION['pwd'])) {
    header('Location: ./index.php');
    exit;
}
$password = $_SESSION['pwd'];
unset($_SESSION['pwd']);
?>

<!DOCTYPE html>
<html>
<body>
<h1>La password generata è:</h1>
<p><strong><?php echo htmlspecialchars($password); ?></strong></p>
<a href="./index.php">Genera un'altra password</a>
</body>
</html>
