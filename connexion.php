
<?php
$servername='localhost';
$username='root';
$password='';
$dbname='gestion';

$conn= mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("erreur de connexion à la base de donnée " . mysqli_connect_error()); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    <li>
    <a href="indexx.php">Retour</a>
    </li>
    </ul>
</body>
</html>

