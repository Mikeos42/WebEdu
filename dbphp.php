<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Datenbanken</title>
</head>
<body>

<?php
$HOST = 'sql7.freemysqlhosting.net';
$USER = 'sql7282169';
$PASSWORD = 'HnAwibiYGP';
$DATABASE = 'sql7282169';
$db = mysqli_connect($HOST, $USER, $PASSWORD, $DATABASE);

if ($db) {
    $bef = mysqli_query($db, 'SELECT * FROM benutzer;');
    while ($satz = mysqli_fetch_array($bef)) {
        echo $satz['benutzername'];
        echo "<br>";
    }
} else {
    echo "ES HAT NICHT FUNKTIONIERT!!";
}
?>

</body>
</html>