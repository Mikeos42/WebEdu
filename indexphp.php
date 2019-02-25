<?php
echo "<form action='' method='post'>";
echo    "<input type='range' name='hoehe' min='50' max='250'>";
echo    "<p>50-250px</p>";
echo    "<br>";
echo    "<input type='range' name='breite' min='50' max='250'>";
echo    "<p>50-250px</p>";
echo    "<br>";
echo    "<button type='submit' name='ok'>Submit</button>";
echo "</form>";

//-----------------------

echo "<form action='' method='post'>";
echo    "<br>";
echo    "<button type='submit' name='again'>Reset</button>";
echo    "<br>";
if (isset($_POST['ok'])) {
    $hoehe = $_POST['hoehe'];
    $breite = $_POST['breite'];
    $hoehe2 = $hoehe * sqrt(2);
    $breite2 = $breite * sqrt(2);
    echo "<style>
        .box {
            width: $hoehe;
            height: $breite;
            background-color: red;
            transition: width 2s,height 2s;
            text-align: center;
        }
        .box:hover {
            width: $breite2;
            height: $hoehe2;
        }
        </style>";
    echo "<div class='box'><p>Height: $hoehe</p><p>Breite: $breite</p></div>";
}
echo "</form>";
?>