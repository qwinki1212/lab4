<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Сторінка 3</title>
</head>
<body>

<p><b>Імʼя з SESSION:</b> <?= $_SESSION['username'] ?? 'нема даних' ?></p>
<p><b>Імʼя з COOKIE:</b> <?= $_COOKIE['username'] ?? 'нема даних' ?></p>

<a href="index.php">На головну</a>

</body>
</html>