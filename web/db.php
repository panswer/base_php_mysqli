<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQLi</title>
</head>
<body>
    <div>
        <?php
        echo "DATABASE: " . getenv("MYSQL_DATABASE") . "<br>";
        echo "MYSQL_USER: " . getenv("MYSQL_USER") . "<br>";
        echo "MYSQL_PASSWORD: " . getenv("MYSQL_PASSWORD") . "<br>";
        ?>
    </div>
    <div>
        <p>Conexion a base de datos</p>
        <?php
            $mysqli = new mysqli("web-db", getenv("MYSQL_USER"), getenv("MYSQL_PASSWORD"), getenv("MYSQL_DATABASE"));
        ?>
    </div>
</body>
</html>