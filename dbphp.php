<?php
$db = mysqli_connect('localhost','root','','miki');

if ($db) {
    echo "<form method='post' action=''>
            <input type='text' name='benutzername'>
            <input type='text' name='passwort'>
            <input type='submit' name='ok'>
        </form>";

    if (isset($_POST['ok'])) {
        $sql = "SELECT * FROM benutzer";
        mysqli_query($db, $sql);
    }

    echo "<form method='post' action=''>
        <input type='submit' name='again'>
        </form>";
}