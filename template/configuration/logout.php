<?php 

require_once "session.php";

if (isset($_SESSION["user"])) {
    unset($_SESSION["user"]);

    echo "vous avez été déconnecté";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="../../index.PHP">retour à l'acceuil</a>
</body>
</html>
