<?php
$db = mysqli_connect('localhost','root','','miki');

if ($db) {
    echo "<form method='post' action=''>
            <input type='text' name='benutzername'>
            <input type='text' name='passwort'>
            <input type='submit' name='ok'>
        </form>";

    if (isset($_POST['ok'])) {
        //$tb = mysqli_query($db,"FROM * SELECT ");
        //todo hilfe, ich habe keine Ahnung wie das weitergehen soll!!
    }

    echo "<form method='post' action=''>
        <input type='submit' name='again'>
        </form>";
}